<?php
include("account_sql.php");
$showError = array();
$createAccount = new Account;
if ($_SERVER["REQUEST_METHOD"] == "POST") {        
    //Username
    $username = strip_tags($_POST['username']);
    $username = str_replace(' ', '', $username);

    //Password
    $password = strip_tags($_POST['password']); //password, strip_tags = remove html tags  
    $confirmPassword = strip_tags($_POST['confirmpassword']); //contact number, strip_tags = remove html tags
    $createAccount->setUsername($username);
    //username and password validation
    if (!$createAccount -> readByUsername($username)){
        if ($password == $confirmPassword){
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);     
            $createAccount->setPassword($hashedPassword);
            $createAccount->insertData();
        }
        else{
            array_push($showError, "password_mismatch");
        }
    }
    else{
        array_push($showError, "username_taken");
    }
    //return
    if (!empty($showError)) {
        $errorInURL = implode("&&", $showError);
        header("location:/final-project-studentmanagement/signup.php?err=$errorInURL");
    } else {
        header("location:/final-project-studentmanagement/login.php?register=success");
    }

}

?>