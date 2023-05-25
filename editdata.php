<?php
require_once("header.php");
require_once("student_sql.php");
?>

<!-- Edit Data -->

<?php
$user = new Student;

if (isset($_GET["action"]) && $_GET["action"] == "edit"){
	
	$id = $_GET["id"];
	$result = $user->readById($id);
}
?>


<div class="panel-heading"> 
	<h3>Please Update Your Information<a class="pull-right btn btn-danger" href="index.php">Back</a></h3>
	</div>

<div class="panel-body">
	
<form action="update.php" method="POST">

  <div class="form-group">
    <label for="usr"></label>
    <input type="hidden" name="id" value="<?php echo $result ['id'];?>"  required="1" class="form-control" >
  </div>
  
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" name="fname"  value="<?php echo $result ['fname'];?>"  required="1" class="form-control" >
    <label for="lname">Last Name</label>
    <input type="text" name="lname"  value="<?php echo $result ['lname'];?>"  required="1" class="form-control" >
  </div>
  
  <div class="form-group">
    <label for="course">Course</label>
    <input type="text" name="course"  value="<?php echo $result ['course'];?>" required="1" class="form-control" >
  </div>
  
   <div class="form-group">
    <label for="level">Level</label>
    <input type="text" name="level"  value="<?php echo $result ["level"];?>" required="1" class="form-control" >
  </div>
  
  <button type="submit" name="edit" class="btn btn-primary">Update</button>
  
</form>
</div>















<?php require_once("footer.php");?>