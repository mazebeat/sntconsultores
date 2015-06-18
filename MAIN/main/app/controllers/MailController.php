<?php

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
//		try {
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
			$messageId = Crypt::encrypt(Str::lower($name) . $email . $datesend);
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
//			Mail::send('emails.us', $data, function ($message) {
//				$message->from(Config::get('api.company.contactemail'), Config::get('api.company.name'));
//				$message->to(Config::get('api.company.contactemail'), Config::get('api.company.name'))->subject('Contacto Cliente');
//			});

			// Redirect to Home age (Change for ajax submit)
			return Redirect::to('/');
//		} catch (Exception $e) {
//			$this->getLog()->error('ERROR: ' . $e);
//		}
	}

	public function readmail()
	{
		try {
			$messageId = Input::get('messageId', null);

			if (isset($messageId)) {
				// UPDATE READDATE INTO MESSAGES TABLE

				header('Content-Type', 'image/png');
				$image = File::get(public_path('images/blank.png'));

				return $image;
			}
		} catch (Exception $e) {
			$this->getLog()->error('ERROR: {}', $e->getMessage());
		}
	}
}