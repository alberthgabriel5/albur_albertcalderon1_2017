<?php
class SPDO extends PDO{    
    private static $instance=null; 
    public function __construct() {
       $config= Config::singleton();
       parent::__construct('sqlsrv:server='.$config->get('dbhost').'; Database='.$config->get('dbname'),
               $config->get('dbuser'), $config->get('dbpass'));
       $this-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);       
       
    } // constructor   
     public static function singleton(){
        if(self::$instance==null){
            self::$instance=new self();
        }
        return self::$instance;
    } // singleton
    
} // fin clase

?>
