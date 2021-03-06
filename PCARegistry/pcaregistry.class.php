<?php
/**
 * The PCARegistry object
 * Implements the Registry and Singleton design patterns
 *
 * @version 0.1
 * @author Michael Peacock
 */
class PCARegistry {
	
	/**
	 * Our array of objects
	 * @access private
	 */
	private static $objects = array();
	
	/**
	 * Our array of settings
	 * @access private
	 */
	private static $settings = array();
	
	/**
	 * The frameworks human readable name
	 * @access private
	 */
	private static $frameworkName = 'PCA Framework version 0.1';
	
	/**
	 * The instance of the registry
	 * @access private
	 */
	private static $instance;
	
	/**
	 * Private constructor to prevent it being created directly
	 * @access private
	 */
	private function __construct()
	{
	
	}
	
	public function storeCoreObjects()
	{
		$this->storeObject('database', 'db' );
		$this->storeObject('template', 'template' );
	}
		
	/**
	 * singleton method used to access the object
	 * @access public
	 * @return 
	 */
	public static function singleton()
	{
		if( !isset( self::$instance ) )
		{
			$obj = __CLASS__;
			self::$instance = new $obj;
		}
		
		return self::$instance;
	}
	
	/**
	 * prevent cloning of the object: issues an E_USER_ERROR if this is attempted
	 */
	public function __clone()
	{
		trigger_error( 'Cloning the registry is not permitted', E_USER_ERROR );
	}
	
	/**
	 * Stores an object in the registry
	 * @param String $object the name of the object
	 * @param String $key the key for the array
	 * @return void
	 */
	public function storeObject( $object, $key )
	{
		require_once('objects/' . $object . '.class.php');
		self::$objects[ $key ] = new $object( self::$instance );
	}
	
	/**
	 * Gets an object from the registry
	 * @param String $key the array key
	 * @return object
	 */
	public function getObject( $key )
	{
		if( is_object ( self::$objects[ $key ] ) )
		{
			return self::$objects[ $key ];
		}
	}
	
	/**
	 * Stores settings in the registry
	 * @param String $data
	 * @param String $key the key for the array
	 * @return void
	 */
	public function storeSetting( $data, $key )
	{
		self::$settings[ $key ] = $data;
	}
	
	/**
	 * Gets a setting from the registry
	 * @param String $key the key in the array
	 * @return void
	 */
	public function getSetting( $key )
	{
		return self::$settings[ $key ];
	}
	
	/**
	 * Gets the frameworks name
	 * @return String
	 */
	public function getFrameworkName()
	{
		return self::$frameworkName;
	}
	
	
}

?>