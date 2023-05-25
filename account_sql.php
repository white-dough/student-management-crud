<?php
require_once("db.php");
?>

<?php

class Account
{

    public $table = "account";
    private $username;
    private $password;
    public function setUsername($username){
		$this->username = $username;
	}
	public function setPassword($password){
		$this->password = $password;
	}

    //Insert Data

    public function insertData()
    {

        $sql = "INSERT INTO $this->table(username,password) VALUES(:username,:password)";

        $stmt = Db::prepareOwn($sql);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);

        return $stmt->execute();
    }
    function readByUsername($username){
		
		$sql = "SELECT * FROM $this->table WHERE username=:username";
		
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":username",$username);
		$stmt->execute();
		return $stmt->fetch();
	}

    function loginProcess($username, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE username=:username";
        $stmt = Db::prepareOwn($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $result = $stmt->fetch();
        if (!$result){return "location:/final-project-studentmanagement/login.php?err=1";}//username not found
        else if (password_verify($password, $result['password'])) {//successful login
            $this->username = $username;
            $this->password = $password;
            return "location:/final-project-studentmanagement/index.php";
        }
        else{
            return "location:/final-project-studentmanagement/login.php?err=2";//pass dont match
        }
    }
}
?>