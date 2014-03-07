<?php
/**
 * PCAFramework
 * Framework loader - acts as a single point of access to the Framework
 *
 * @version 0.1
 * @author Michael Peacock
 */
  
// first and foremost, start our sessions
session_start();

// setup some definitions

// the applications root path, so we can easily get this path from files located in other folders
define("APP_PATH", dirname( __FILE__ ) . "/" );

// we will use this to ensure scripts are not call from outside the framework
define("PCAFW", true );

/**
 * Magic auto load function
 * used to include the appropiate -controller- files when theya re needed
 * @param String the name of the class
 */
 
function __autoload($class_name) 
{
	require_once('controllers/' . $class_name . '/' . $class_name . ' .php' );
}

// require our registry
require_once('PCARegistry/pcaregistry.class.php');
$registry = PCARegistry::singleton();

// print out the framework name - just to check everything is working
print $registry->getFrameworkName();
print $registry->storeObject('template','template');

exit();
