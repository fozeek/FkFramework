<?php

	/*
	 * This is the configuration file
	 * All Fk configuration is write here and the subpages required
	 * 
	 * If you want to add configurations for your external vendor, please create a new file in this folder with the vendor's name (ex : myVendorName.config.php) and require it just below
	 */

	/*
	 *	Specifics configurations
	 */
	require 'db.config.php';
	// require MyVendorName.config.php

	// This required file doesn't need to be modified, all configurations for the boostrap is defined in this current page
	require 'bootstrap.config.php';

	use Fk\Config\Config;
	use Fk\Cache\Cache;
	use Fk\Route\Router;

	/*
	 *	All cache configuration
	 */
	Cache::setDefaultDuration(60);
	Cache::setDefaultDirname('/data/cache/');
	Config::write('cache', [
		'path' => null, // The default path will be passed
		'duration' => null, // The default duration will be passed
	]);
	Config::write('kernel.cache', [
		'path' => null, // The default path will be passed
		'duration' => null, // The default duration will be passed
	]);

	// Router::setUrlPattern([
	// 	Router::$LANG_CODE => true,
	// 	Router::$CONTROLLER_CODE => true,
	// 	Router::$ACTION_CODE => true,
	// 	Router::$PARAMS_CODE => true,
	// ], false);
	Router::setDefaultsRoutes('Home', 'index');

	Config::write('helpers', [
		'Auth' 				=> 'Fk\View\Helper\Adapter\Auth',
		'Session' 			=> 'Fk\View\Helper\Adapter\Session',
		'Cache' 			=> 'Fk\Cache\Cache',
		'Log'				=> 'Fk\Log\Log',
		'Filter'			=> 'Fk\Filter\Filter',
		'Form'				=> 'Fk\Form\FormHelper',
	]);

	Config::write('modules', [
		'App' => 'app/',
		//'Fozeek' => '/modules/fozeek/',
	]);

	Config::write('langs', [
		'autorized' => [
			'fr',
			'en',
			'pt',
			'us',
		],
		'default' => 'fr',
	]);

	Config::write('kernel.params_to_controller_mode', 'linear');
	Config::write('kernel.debug_mode', 1);