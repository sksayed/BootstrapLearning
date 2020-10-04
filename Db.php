<?php

namespace Db;

use PDO;
use PDOException;
use Utilities\DB_helper;


include 'Utilities.php';


class ConnectDb
{
  // Hold the class instance.
  private static $instance = null;
  private $conn = null;
  private $insert_statement = null;
  private  $id = null;
  private  $name = null;
  private  $password = null;


  // The db connection is established in the private constructor.
  private function __construct()
  {
    try {
      $this->conn = new PDO(
        "mysql:host=" . DB_helper::$host . ";dbname=" . DB_helper::$db_name,
        DB_helper::$user_name,
        DB_helper::$password
      );
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->insertSetup();
    } catch (PDOException $exp) {
      echo "connection failed " . $exp->getMessage();
    }
  }

  private function insertSetup()
  {
    try {
      $this->insert_statement = $this->conn->prepare("INSERT INTO user (id, name, password) VALUES (:id,:name,:password)");
      $this->insert_statement->bindParam(':id', $this->id);
      $this->insert_statement->bindParam(':name', $this->name);
      $this->insert_statement->bindParam(':password', $this->password);
    } catch (PDOException $exp) {
      echo " statement failed to create " . $exp->getMessage();
    }
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new ConnectDb();
    }

    return self::$instance;
  }

  public function getConnection()
  {
    return $this->conn;
  }

  public function insertUser(User $user)
  {
    $this->id = $user->getEmail();
    $this->name = $user->getName();
    $this->password = $user->getPassword();
    $result  = $this->insert_statement->execute();
    return $result ;
  }
}

class User
{
  function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
    return $this->email;
  }
  public function getPassword()
  {
    return $this->password;
  }
}
