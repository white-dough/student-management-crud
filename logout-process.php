<?php
    session_start ();
    session_destroy();
    unset($_SESSION["login"]);
    header("location:/final-project-studentmanagement/login.php?logout=success");
?>