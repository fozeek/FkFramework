<?php

	use Fk\Config\Config;
	use Fk\Cache\Cache;

	Config::write('components', [
		'Request'				=> function ($application) {
			return $application->getRequest();
		},
		'Response'			=> 'Fk\Http\Response\Response',
		//'Auth' 				=> 'Fk\Auth\Auth',
		'Session' 			=> 'Fk\Session\Session',
		'Model' 				=> 'Fk\ORM\TableManager',
		'Cache' 				=> function ($application) {
			return new Cache(Config::read('cache.path'), Config::read('cache.duration'));
		},
		//'Event'				=> 'Fk\Mvc\Component\Adapter\EventManager',
		//'Log'					=> 'Fk\Log\Log',
		//'Filter'				=> 'Fk\Filter\Filter',
		//'View'				=> 'Fk\View\View',
		//'Form'				=> 'Fk\Form\Form',
	]);