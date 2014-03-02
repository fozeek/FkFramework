<?php

namespace App;

use Fk\Module\ModuleInterface;

class Module implements ModuleInterface {
	public function getModuleConfig() {
		return include __DIR__.'/config/app.config.php';
	}
	public function getAutoLoadConfig() {
		return include __DIR__.'/config/autoload.config.php';
	}
	public function getListenerConfig() {
		return array();
	}
	public function getRouteConfig() {
		return include __DIR__.'/config/routes.config.php';
	}
}