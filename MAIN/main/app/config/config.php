<?php

/*
 | ------------------------------------------------------
 | App Configurator
 | ------------------------------------------------------
 | Use this file to declare all api values to call later
 |
 */

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	$configFile = public_path('config_landing.ini');
}
else {
	$configFile = public_path('/config_landing.ini');
}

$ini = parse_ini_file($configFile, true);

if (array_get($ini, 'app.debug') == '1' || array_get($ini, 'app.debug') == 'true') {
	array_set($ini, 'app.debug', (bool)true);
	Config::set('app.debug', (bool)true);
}
else if (array_get($ini, 'app.debug') == '0' || array_get($ini, 'app.debug') == 'false' || array_get($ini, 'app.debug') == '') {
	array_set($ini, 'app.debug', (bool)false);
	Config::set('app.debug', (bool)false);
}

Config::set('app.url', array_get($ini, 'app.url'));

if (!File::exists(array_get($ini, 'logs.path'))) {
	if (array_get($ini, 'logs.path') != '') {
		File::makeDirectory($path = array_get($ini, 'logs.path'), (int)$mode = 777, (bool)$recursive = true, (bool)$force = true);
	}
}

return $ini;