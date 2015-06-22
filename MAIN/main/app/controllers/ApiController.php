<?php

use App\Util\MessageLog;
use Illuminate\Support\Facades\Crypt;

/**
 * Class ApiController
 */
class ApiController extends \BaseController
{
	private $token;
	private $data;
	private $status;
	private $headers;
	private $credentials;
	private $log;

	/**
	 * @param null  $token
	 * @param array $data
	 * @param int   $status
	 * @param array $headers
	 */
	public function __construct($token = null, $data = array(), $status = 200, $headers = array('ContentType' => 'application/json', 'charset' => 'utf-8'))
	{
		$this->token   = isset($token) ? $token : Crypt::encrypt(str_random(40));
		$this->data    = $data;
		$this->status  = $status;
		$this->headers = $headers;

		$this->log = new MessageLog('sntconsultores_app');
	}

	/**
	 * @param $idProceso
	 */
	public static function mailEjecutivo($idProceso)
	{
		try {
			$proceso = Proceso::find($idProceso);
			$id      = $proceso->idProceso;

			static::verifyMailEjecutivo($id);

			if ($proceso->cliente->fonoParticular != '') {
				$fono = $proceso->cliente->fonoParticular;
			}
			elseif ($proceso->cliente->fonoComercial != '') {
				$fono = $proceso->cliente->fonoComercial;
			}
			else {
				$fono = 'NULL';
			}

			if ($proceso->cliente->fonoCelular != '') {
				$cel = $proceso->cliente->fonoCelular;
			}
			else {
				$cel = 'NULL';
			}

			$list = array(Texto::$LLAVE_INICIO,
			              $proceso->ejecutivo->correoEjecutivo, // correoejecutivo
			              $proceso->cliente->rutCliente, // rutcliente
			              $proceso->ejecutivo->local->nombreLocal, // nombrelocal
			              $proceso->cliente->emailCliente, // emailCliente
			              $proceso->vendedor->nombreVendedor, // nombrevendedor
			              $proceso->fechaClickLink, // fechaclicklink
			              $proceso->cliente->nombreCliente, // nombrecliente
			              $proceso->cliente->marcaVehiculo, // marcavehiculo
			              $proceso->cliente->modeloVehiculo, // modelovehiculo
			              $proceso->cliente->valorVehiculo, // valorvehiculo
			              $fono, // telefonocliente
			              $cel, // celularcliente
			              $proceso->cliente->idBody, // bodyid
			);

			$line          = static::formatLine($list);
			$nameFile      = 'Ejecutivos' . $id . '_' . static::milliseconds() . '.txt';
			$path          = Config::get('config.params.salidamailejecutivo');
			$file          = $path . $nameFile;
			$bytes_written = File::put($file, $line);

			if ($bytes_written === false) {
				echo 'Error writing to file';
			}

		} catch (Exception $e) {
			echo $e->getMessage() . ' //     ' . $e->getLine();
		}
	}

	/**
	 * @param int    $idProceso
	 * @param string $path
	 *
	 * @return bool
	 */
	public static function verifyMailEjecutivo($idProceso = 0, $path = '')
	{
		try {
			if ($path == '') {
				$path = Config::get('config.params.salidamailejecutivo');
			}

			if (isset($idProceso) && $idProceso != 0) {
				$nameFile = 'Ejecutivos' . $idProceso;
				$files    = File::files($path);

				foreach ($files as $key => $value) {
					$tempName = explode('_', $value);
					$tempName = str_replace('/', '', str_replace($path, '', $tempName));

					if (count($tempName) > 1 && $tempName[0] != '') {
						if ($nameFile === $tempName[0]) {
							File::delete($value);
						}
					}
				}
			}

		} catch (Exception $e) {
			echo $e->getMessage() . ' || ' . $e->getLine();
		}
	}

	/**
	 * @param array $list
	 *
	 * @return string
	 */
	public static function formatLine(array $list)
	{
		$line = '';

		try {
			foreach ($list as $key => $value) {
				$line .= $value . '|';
			}
		} catch (Exception $e) {
			echo $e->getMessage() . ' // ' . $e->getLine();
		}

		return $line;
	}

	/**
	 * @return mixed
	 */
	public static function milliseconds()
	{
		$mt = explode(' ', microtime());

		return $mt[1] * 1000 + round($mt[0] * 1000);
	}

	/**
	 * @param $path
	 */
	public static function returnImage($path)
	{
		header('Content-Type: image/' . substr($path, -3));
		header('Content-Length: ' . filesize($path));
		readfile($path);
		exit;
	}

	/**
	 * @param $path
	 *
	 * @return \Illuminate\Http\Response
	 */
	public static function returnImage2($path)
	{
		if (File::exists($path)) {
			$filetype = File::type($path);
			$response = Response::make(File::get($path), 200);
			$response->header('Content-Type', $filetype);

			return $response;
		}
	}

	/**
	 * @param      $assoc_arr
	 * @param      $path
	 * @param bool $has_sections
	 *
	 * @return array (ok, message)
	 */
	public static function write_ini_file($assoc_arr, $path, $has_sections = false)
	{
		$comments   = '';
		$content    = '';
		$oldContent = '';

		if (File::exists($path)) {
			$old = File::get($path);
			$old = explode(PHP_EOL, $old);

			foreach ($old as $key => $value) {
				if (\Str::startsWith($value, ';')) {
					$comments .= $value . PHP_EOL;
				}
				else {
					$oldContent .= $value . PHP_EOL;
				}
			}
		}


		//		dd($has_sections);
		if ($has_sections) {
			foreach ($assoc_arr as $key => $value) {
				if (is_array($value)) {
					$content .= '[' . $key . ']' . PHP_EOL;
					foreach ($value as $key2 => $value2) {
						if (is_array($value2)) {
							for ($i = 0; $i < count($value2); $i++) {
								$content .= $key2 . '[] = "' . $value2[$i] . '"' . PHP_EOL;
							}
						}
						else if ($value2 == '') {
							$content .= $key2 . ' = ' . PHP_EOL;
						}
						else {
							$content .= $key2 . ' = "' . $value2 . '"' . PHP_EOL;
						}
					}
				}
				else {
					$content .= $key . ' = "' . $value . '"' . PHP_EOL;
				}
			}
		}
		else {
			foreach ($assoc_arr as $key => $value) {
				if (is_array($value)) {
					for ($i = 0; $i < count($value); $i++) {
						$content .= $key . '[] = "' . $value[$i] . '"' . PHP_EOL;
					}
				}
				else if ($value == '') {
					$content .= $key . ' = ' . PHP_EOL;
				}
				else {
					$content .= $key . ' = "' . $value . '"' . PHP_EOL;
				}
			}
		}

		if ($comments != '') {
			$content = $comments . $content;
		}

		$bytes_written = File::put($path, $content);
		if ($bytes_written === false) {
			$content       = $comments . $oldContent;
			$bytes_written = File::put($path, $content);
			if ($bytes_written === false) {
				return array('ok' => false, 'message' => 'File with error when try restored');
			}

			return array('ok' => true, 'message' => 'File restored correctly');
		}

		return array('ok' => true, 'message' => 'File writed');
	}

	/**
	 * @return \MessageLog
	 */
	public function getLog()
	{
		return $this->log;
	}

	/**
	 * @param \MessageLog $log
	 */
	public function setLog($log)
	{
		$this->log = $log;
	}

	/**
	 * @return array
	 */
	public function getCredentials()
	{
		return $this->credentials;
	}

	/**
	 * @param array $credentials
	 */
	public function setCredentials($credentials)
	{
		$this->credentials = $credentials;
	}

	/**
	 * @return null
	 */
	public function getToken()
	{
		return $this->token;
	}

	/**
	 * @param null $token
	 */
	public function setToken($token)
	{
		$this->token = $token;
	}

	/**
	 * @param null $data
	 * @param null $status
	 * @param null $headers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function response($data = null, $status = null, $headers = null)
	{
		$data    = isset($data) ? $this->getData() : $data;
		$status  = isset($status) ? $this->getStatus() : $status;
		$headers = isset($headers) ? $this->getHeaders() : $headers;

		return Response::json($data, $status, $headers);
	}

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param array $data
	 */
	public function setData($data)
	{
		$this->data = $data;
	}

	/**
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param int $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/**
	 * @return array
	 */
	public function getHeaders()
	{
		return $this->headers;
	}

	/**
	 * @param array $headers
	 */
	public function setHeaders($headers)
	{
		$this->headers = $headers;
	}
}