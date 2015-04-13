<?php

/**
 * Simple-Site Index
 * @author Simple-Site Team
 * @email  < service[at]simple-site.cn >
 * @site   < http://www.simple-site.cn >
 */
$application = '../application';

/**
 * The directory in which your modules are located.
 */
$modules = '../modules';

/**
 * The directory in which the Kohana resources are located. The system
 * directory must contain the classes/kohana.php file.
 */
$system = '../system';

/**
 * The default extension of resource files. If you change this, all resources
 * must be renamed to use the new extension.
 */
define('EXT', '.php');

/**
 * Set the PHP error reporting level. If you set this in php.ini, you remove this.
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
/**
 * End of standard configuration! Changing any of the code below should only be
 * attempted by those with a working knowledge of Kohana internals.
 */

// Set the full path to the docroot
define('DOCROOT', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

// Make the application relative to the docroot, for symlink'd index.php
if (!is_dir($application) AND is_dir(DOCROOT . $application))
	$application = DOCROOT . $application;

// Make the modules relative to the docroot, for symlink'd index.php
if (!is_dir($modules) AND is_dir(DOCROOT . $modules))
	$modules = DOCROOT . $modules;

// Make the system relative to the docroot, for symlink'd index.php
if (!is_dir($system) AND is_dir(DOCROOT . $system))
	$system = DOCROOT . $system;

// Define the absolute paths for configured directories
define('APPPATH', realpath($application) . DIRECTORY_SEPARATOR);
define('MODPATH', realpath($modules) . DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system) . DIRECTORY_SEPARATOR);

// Required once function
require_once(MODPATH . 'common/function.php');

// Clean up the configuration vars
unset($application, $modules, $system);

if (file_exists('install' . EXT)) {
	// Load the installation check
	return include 'install' . EXT;
}

/**
 * Define the start time of the application, used for profiling.
 */
if (!defined('KOHANA_START_TIME')) {
	define('KOHANA_START_TIME', microtime(TRUE));
}

/**
 * Define the memory usage at the start of the application, used for profiling.
 */
if (!defined('KOHANA_START_MEMORY')) {
	define('KOHANA_START_MEMORY', memory_get_usage());
}

// Bootstrap the application
require APPPATH . 'bootstrap' . EXT;

if (PHP_SAPI == 'cli') // Try and load minion
{
	class_exists('Minion_Task') OR die('Please enable the Minion module for CLI support.');
	set_exception_handler(array('Minion_Exception', 'handler'));

	Minion_Task::factory(Minion_CLI::options())->execute();
} else {
	/**
	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
	 * If no source is specified, the URI will be automatically detected.
	 */
	echo Request::factory(TRUE, array(), FALSE)
		->execute()
		->send_headers(TRUE)
		->body();
}
