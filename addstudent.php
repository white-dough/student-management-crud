<?php require_once("header.php");?>



<div class="panel-heading"> 
	<h3>Please Add Student's Information<a class="pull-right btn btn-danger" href="index.php">Back</a></h3>
	</div>

<div class="panel-body">
	
<form action="index.php" method="POST">
  <div class="form-group">
    <label for="usr">First Name</label>
    <input type="text" name="fname" required="1" class="form-control" >
    <label for="usr">Last Name</label>
    <input type="text" name="lname" required="1" class="form-control" >
  </div>
  <div class="form-group">
    <label for="dep">Course</label>
    <input type="text" name="course" required="1" class="form-control" >
  </div>
   <div class="form-group">
    <label for="sell">Level</label>
    <input type="text" name="level" required="1" class="form-control" >
  </div>
  
  <button type="submit" name="sub" class="btn btn-success">Submit</button>
  
</form>

</div>




<?php require_once("footer.php");?>