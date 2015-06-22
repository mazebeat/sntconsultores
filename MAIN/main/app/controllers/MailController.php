<?php

use App\Util\MessageLog;

/**
 * Created by PhpStorm.
 * User: Maze
 * Date: 29-05-2015
 * Time: 9:31
 */
class MailController extends ApiController
{
	public function sendmail()
	{
		try {
			$rules     = array('name' => 'required', 'email' => 'required|email', 'subject' => 'required', 'message' => 'required');
			$data      = Input::only('name', 'email', 'subject', 'message');
			$validator = Validator::make($data, $rules);

			// Validate inputs values
			if ($validator->fails()) {
				return Redirect::back()->withInput(Input::except(array('_token')))->withErrors($validator);
			}

			// Set min values
			$name      = Input::get('name');
			$email     = Str::lower(Input::get('email'));
			$subject   = Str::lower(Input::get('subject'));
			$message   = Str::lower(Input::get('message'));
			$datesend  = Carbon::now();
			$messageId = Crypt::encrypt(Str::lower($name) . '|' . $email . '|' . $datesend);
			$data      = array('name'    => $name,
			                   'email'   => $email,
			                   'subject' => $subject,
			                   'msg'     => $message,
			                   'msgId'   => $messageId);
			// Mail for client
			Mail::send('emails.client', $data, function ($message) use ($name, $email) {
				$message->from(Config::get('api.company.contactemail'), Config::get('api.company.name'));
				$message->to($email, Str::upper($name))->subject('Contacto SNT Consultores');
			});

			// Mail for us
			Mail::send('emails.us', $data, function ($message) {
				$message->from(Config::get('api.company.contactemail'), Config::get('api.company.name'));
				$message->to(Config::get('api.company.contactemail'), Config::get('api.company.name'))->subject('Contacto Cliente');
			});

			// Redirect to Home age (Change for ajax submit)
			return Redirect::to('/');
		} catch (Exception $e) {
			$this->getLog()->error('ERROR: ' . $e);
		}
	}

	public function readmail($id)
	{
		try {
			if (isset($id)) {
				// UPDATE READDATE INTO MESSAGES TABLE
				$this->getLog()->info('READING MESSAGEID: %s', array($id));

				$data = Crypt::decrypt($id);
				$this->saveData($data);

				$image = public_path('images/blank.png');
				ApiController::returnImage($image);
			}
		} catch (Exception $e) {
			$this->getLog()->error('ERROR: ' . $e->getMessage());
		}
	}

	public function saveData($data)
	{
		if (count($data) < 0 || isset($data) || $data == '') {
			$this->getLog()->error('ERROR: EMPTY DATA');
		}

		$data   = explode('|', $data);
		$msg    = 'REGISTER DATA:';
		$lenght = count($data);
		for ($i = 0; $i < $lenght; $i++) {
			$msg .= ' %s';
		}

		$logger = new MessageLog('sntconsultores_reader');
		$logger->info($msg, $data);
	}
}