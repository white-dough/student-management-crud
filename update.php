<?php
require_once("student_sql.php");
?>

<!-- Update Data -->

<?php
$user = new Student;

if(isset($_POST["edit"])){
	
	$id = $_POST["id"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$course = $_POST["course"];
	$level = $_POST["level"];
	
	$user -> setFName($fname);
	$user -> setLName($lname);
	$user -> setcourse($course);
	$user -> setlevel($level);
	
	
	
	if($user->updateData($id)){
		header("location:index.php?update");
	}
	
}












?>