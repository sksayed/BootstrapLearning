<?php


use Db\ConnectDb;
use Db\User;

include("Db.php");

$nameErr = $emailErr = $passwordErr = "";
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $error = true;
    } else {
        //$name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
            $nameErr = "Only letters and white space allowed";
            $error = true;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $error = true;
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $error = true;
        }
    }

    if (empty($_POST["pwd"])) {
        $passwordErr = "password is requierd";
        $error = true;
    }

    //check if any error has occured 
    if ($error) {
        //ECHO WITH ERROR MESSAGES
        $error_reply = array("nameErr" => $nameErr, "emailErr" => $emailErr, "passwordErr" => $passwordErr, "code" => 3300);
        echo json_encode($error_reply);
    } else {
        $db = ConnectDb::getInstance();
        $user = new User($_POST["name"], $_POST["email"], $_POST["pwd"]);
        if ($db->insertUser($user)) {
            $reply = array("code" => 200, "msg" => "success");
            //set user in the session 
            session_start();
            $_SESSION["name"] = $user->getName();
            $_SESSION["id"] = $user->getEmail();
            echo json_encode($reply);
        } else {
            $reply = array("code" => 3300, "msg" => "unsuccess");
            echo json_encode($reply);
        }
    }
}
