<?php

// prevent this file from being called directly
if( ! defined( 'PCAFW' ))
{
	echo 'This file can only be called via the main index.php file';
	exit();
}

/**
 * Template manager class
 */
class template
{
	 private $page;
 
 
	/**
	* Hello!
	*/
	public function __construct()
	{
	 	include( APP_PATH . '/PCARegistry/objects/page.class/php');
		$this->page = new Page();
	}
	
	/**
     * Add a template bit onto our page
     * @param String $tag the tag where we insert the template e.g. {hello}
     * @param String $bit the template bit (path to file, or just the filename)
     * @return void
     */
	 public function addTemplateBit()
	 {
		if( strpos( $bit, 'skins/') === false)
		{
			$bit = 'skins' . PCARegistry::getSetting('skin') . '/templates/' . $bit;
		}
		$this->page->addTemplateBit( $tag, $bit );
	 }
	 
	/**
     * Put the template bits into our page content
     * Updates the pages content
     * @return void
     */
	 private function replaceBits()
	 {
		$bits = $this->page->getBits();
		foreach( $bits as $tag => $tamplate )
		{
			$templateContent = file_get_contents( $bit );
			$newContent = str_replace( '{' . $tag . '}', $templateContent, $this->page->getContent() );
			$this->page->setContent( $newContent );	
		}
	 }
 
 
 
}