<?php

/*
 | ------------------------------------------------------
 | App Modules Configurator
 | ------------------------------------------------------
 | Use this file to declare all api values to call later
 |
 */

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	$configFile = public_path('config_modules.ini');
}
else {
	$configFile = public_path('config_modules.ini');
}

$ini = parse_ini_file($configFile, true);

foreach ($ini as $key => $value) {
	if ($value === '1') {
		array_set($ini, $key, (bool)true);
	}
	else {
		array_set($ini, $key, (bool)false);
	}
}

return $ini;