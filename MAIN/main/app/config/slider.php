<?php

/*
 | ------------------------------------------------------
 | App Modules Configurator
 | ------------------------------------------------------
 | Use this file to declare all api values to call later
 |
 */

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	$configFile = public_path('config_slider.ini');
}
else {
	$configFile = public_path('config_slider.ini');
}

$ini = parse_ini_file($configFile, true);

foreach ($ini as $key => $value) {
	if ($value == '1') {
		array_set($ini, $key, (bool)true);
	}
	elseif ($value == '0' || $value == 'false' || $value == '') {
		array_set($ini, $key, (bool)false);
	}
	else {
		if (is_array($value)) {
			foreach ($value as $k => $v) {
				if (Str::contains($v, '\\')) {
					$v = Str::inifilter($v);
				}
				array_set($value, $k, e($v));
			}
			array_set($ini, $key, $value);
		}
		else {
			if (Str::contains($value, '\\')) {
				dd($value);
			}
			array_set($ini, $key, e($value));
		}
	}
}

return $ini;