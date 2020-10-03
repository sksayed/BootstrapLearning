<?php 

namespace Db ;

use mysqli;
use Utilities\DB_helper;

 class ConnectDb {
    // Hold the class instance.
    private static $instance = null;
    private $conn;
    
    private $servername = DB_helper::$server_name;
    private $username = DB_helper::$user_name;
    private $password = DB_helper::$password;
     
    // The db connection is established in the private constructor.
    private function __construct()
    {
      $this->conn = new new mysqli($servername, $username, $password);
    }
    
    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new ConnectDb();
      }
     
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
  }







?>