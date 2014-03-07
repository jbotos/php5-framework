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
// The applications root path, so we can easily get this path from files located in other folders
define( "APP_PATH", dirname( __FILE__ ) ."/" );
// We will use this to ensure scripts are not called from outside of the framework
define( "PCAFW", true );

// @TODO make a setting
date_default_timezone_set("Europe/London");

/** 
 * Magic autoload function
 * used to include the appropriate -controller- files when they are needed
 * @param String the name of the class
 */
function __autoload( $class_name )
{
	require_once('controllers/' . $class_name . '/' . $class_name . '.php' );
}

// require our registry
require_once('PCARegistry/pcaregistry.class.php');
$registry = PCARegistry::singleton();

// print out the frameworks name - just to check everything is working
print $registry->getFrameworkName();
$registry->storeObject('template','template');
$registry->getObject('template')->generateOutput();

exit();

?>