<?php
session_start ();
include("account_sql.php");
$login = new Account;

if(isset($_REQUEST['submit'])){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
    $result = $login -> loginProcess($username, $password);
    if($result == "location:/final-project-studentmanagement/index.php"){
        $_SESSION["loggedInAccount"] = $login;
        $_SESSION["login"]="1";
        header($result);
    }
    else{
        header($result);
    }
	
}
?>
