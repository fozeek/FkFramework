<?php session_start();

/* ERROR REPORTING */
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Make everything relative to the application root.
chdir(dirname(__DIR__));

// Load the Fk Library
require_once 'vendor/autoload.php';

// Configuration
require_once 'config/config.php';

// Run the application
Fk\Mvc\Application::run();