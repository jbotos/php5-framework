<?php

/**
 * PCAFramework
 * Template class
 *
 * @version 0.1
 * @author Michael Peacock
 */
class Template {
	
	/**
	 * Registry variable
	 * @access private
	 */
	private $registry;
	
	/**
	 * Constructor to create a new Template object
	 * @param PCARegistry $registry the frameworks registry
	 */
	public function __construct( PCARegistry $registry )
	{
		// make it easy to access the registry from within this object
		$this->registry = $registry;
	}
	
	public function generateOutput()
	{
		print 'the HTML output';
	}	
	
}

?>