<?php

return array(

	/**
	 * current selected provider
	 */
	'provider'       => 'GoogleAnalytics',
	/**
	 * configurations for all possible providers
	 */
	'configurations' => array(

		/**
		 * The Google Analytics provider supports the following properties:
		 * - tracking_id (string)
		 * - tracking_domain (string:auto) - default will be 'auto' if config property not exists
		 * - display_features (bool) - default will be false if no config property exists
		 * - anonymize_ip (bool) - default will be false if no config property exists
		 * - auto_track (bool) - default will be false if no config property exists
		 * - debug (bool) - default will be false if no config property exists
		 */
		'GoogleAnalytics' => array(

			/**
			 * Tracking ID
			 */
			'tracking_id' => 'UA-49240454-2',
			/**
			 * Tracking Domain
			 */
			'tracking_domain'  => 'auto',
			/**
			 * enabling the display feature plugin
			 */
			'display_features' => false,
			/**
			 * Use ip anonymized
			 */
			'anonymize_ip'     => true,
			/**
			 * Auto tracking pageview: ga('send', 'pageview');
			 * If false, you have to do it manually for each request
			 * Or you can use Analytics::disableAutoTracking(), Analytics::enableAutoTracking()
			 */
			'auto_track'       => true,
			/**
			 * Enable the debugging version of the
			 */
			'debug'       => false,)

	),

);