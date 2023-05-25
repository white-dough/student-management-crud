<?php
require_once("db.php");
?>

<?php
 
class Student{
	
	public $table = "student";
	
	private $lname;
	private $fname;
	private $course;
	private $level;
	
	public function setLName($lname){
		$this->lname = $lname;
	}
	public function setFName($fname){
		$this->fname = $fname;
	}
	public function setcourse($course){
		$this->course = $course;
	}
	public function setlevel($level){
		$this->level = $level;
	}
	
	
	//Insert Data
	
	public function insertData(){
		
		$sql = "INSERT INTO $this->table(lname,fname,course,level) VALUES(:lname,:fname,:course,:level)";
		
		$stmt = Db::prepareOwn($sql);
		
		$stmt->bindParam(":lname",$this->lname);
		$stmt->bindParam(":fname",$this->fname);
		$stmt->bindParam(":course",$this->course);
		$stmt->bindParam(":level",$this->level);
		
		return $stmt->execute();
	}

	//Read data for update
	
	
function readById($id){
		
		$sql = "SELECT * FROM $this->table WHERE id=:id";
		
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		return $stmt->fetch();	
	}
	
	
	//Update Data
	
	
	function updateData($id){
		
		$sql = "UPDATE $this->table SET lname=:lname, fname=:fname,course=:course,level=:level WHERE id=:id";
		$stmt = Db::prepareOwn($sql);		
		$stmt->bindParam(":lname",$this->lname);
		$stmt->bindParam(":fname",$this->fname);
		$stmt->bindParam(":course",$this->course);
		$stmt->bindParam(":level",$this->level);
		$stmt->bindParam(":id",$id);
		return $stmt->execute();
	}
	

	
	//Read Data
	public function readAll(){
		
		$sql = "SELECT * FROM $this->table";
		$stmt = Db::prepareOwn($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	
	
	//Delete Data
	
	public function deleteData($id){
		
		$sql = "DELETE FROM $this->table WHERE id=:id";
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":id",$id);
		return $stmt->execute();
	}
	
}








?>