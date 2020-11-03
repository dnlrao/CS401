<?php
session_start();
$_SESSION['loginErr'] = array();
$_SESSION['credentials'] = array();
require_once "Dao.php";
       
$emailPattern = '/^([a-zA-Z0-9_\-\.%]+)@([a-zA-Z0-9_\-\.]+)\.(com|gov|org|net|edu)$/';
$postUserEmail = $_POST["emailID"];
$postUserPassword = $_POST["userPassword"];

//Test Cases
// $postUserEmail = "danielrao@gmail.com";
// $postUserPassword = "12345678";

$dao = new Dao(); //helps to establish database connection.
$emailPatternMatch = preg_match($emailPattern , $postUserEmail); //returns a 1 if found 0 if not.
$passwordLength = strlen($postUserPassword); //password length


if($emailPatternMatch == 1){
    if($passwordLength >= 8) {
        $arr = $dao->checkUser($postUserEmail,$postUserPassword);
        if (count($arr) == 1){

            $cookie_name = "Authorized";
            $cookie_value = "true";
            setcookie($cookie_name,$cookie_value);
            //echo "<pre>" . print_r($_COOKIE,1) . "</pre>";
            //echo "Cookie '" . $cookie_name . "' is set!<br>";
            //echo "Value is: " . $_COOKIE[$cookie_name];
            //print_r($arr);
            header("location: index.php");
            exit();
        }
        else {
            $_SESSION['credentials'][] = $postUserEmail;
            $_SESSION['loginErr'][] = "Incorrect Password";
            header("location: login.php");
            exit();
        }
    }
    else {
        $_SESSION['credentials'][] = $postUserEmail;
        $_SESSION['loginErr'][] = "Password must be atleast 8 characters long";
        header("location: login.php");
        exit();
    }

}

elseif ($emailPatternMatch == 0) {

    if($emailPatternMatch == 0 && $passwordLength < 8){
        $_SESSION['credentials'][] = $postUserEmail;
        $_SESSION['loginErr'][] = "Invalid Email";
        $_SESSION['loginErr'][] = "Password must be atleast 8 characters long";
        header("location: login.php");
        exit();
    }

    elseif($emailPatternMatch == 0 && $passwordLength >= 8){
        $_SESSION['credentials'][] = $postUserEmail;
        $_SESSION['loginErr'][] = "Invalid Email";
        header("location: login.php");
        exit();
    }

    else {
        $_SESSION['credentials'][] = $postUserEmail;
        $_SESSION['loginErr'][] = "Fatal Error";
        header("location: login.php");
        exit();
    }

}

else {
    $_SESSION['credentials'][] = $postUserEmail;
    $_SESSION['loginErr'][] = "Fatal Error";
    header("location: login.php");
    exit();
}

// echo "<pre>" . print_r($_SESSION,1) . "</pre>";
?>
