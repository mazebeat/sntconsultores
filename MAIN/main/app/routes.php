<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::get('load/{id}', 'MailController@readmail');
Route::post('contact', 'MailController@sendmail');
Route::get('php_info()', function () {
	dd(phpinfo());
});

Route::get('test', function () {
	$app = array('app'      => array('debug' => 'false',
	                                 'url'   => 'http://localhost/'),
	             'database' => array('host'     => 'localhost',
	                                 'dbname'   => 'db_sntconsultores',
	                                 'username' => 'root',
	                                 'password' => 'SnTC0su1t0*res',),
	             'logs'     => array('path' => 'C:/apps/Amicar/Logs/'),);

	$modules = array('slider'       => 'true',
	                 'we'           => 'true',
	                 'proyects'     => 'true',
	                 'whyUs'        => 'true',
	                 'facts'        => 'false',
	                 'skills'       => 'false',
	                 'services'     => 'true',
	                 'team'         => 'true',
	                 'medias'       => 'true',
	                 'testimonials' => 'true',
	                 'clients'      => 'true',
	                 'contact'      => 'true',
	                 'footer'       => 'true');

	$slider = array('type'            => 'A',
	                'background-blur' => true,
	                'slider1'         => array('title-1' => 'BIENVENIDOS A',
	                                           'title-2' => 'SNT CONSULTORES',
	                                           'text'    => ''),
	                'slider2'         => array('title-1' => 'PERFECCIÓN E INGENIO',
	                                           'text'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellente consequat, ante nulla hendrerit arcu, ac tincidunt drerit arcu, ac tincidunt. Fusce elementum, nulla vel consequat.'),
	                'slider3'         => array('subtitle' => 'AYUDAMOS A QUE SU NEGOCIO CREZCA',
	                                           'title-1'  => 'NEGOCIO \AMP INGENIERÍA',
	                                           'text'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellente consequat, ante nulla hendrerit arcu, ac tincidunt drerit arcu, ac tincidunt. Fusce elementum, nulla vel consequat.'));

	//return ApiController::write_ini_file($sampleData, public_path('config_slider.ini'), true);
});
