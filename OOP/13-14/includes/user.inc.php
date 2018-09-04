<?php 

class User extends Dbh
{
	public function getAllUsers(){
		$stmt=$this->connect()->query("SELECT * FROM ctf");
		while($row=$stmt->fetch()){
			$uid=$row['user'];
			echo $uid;
		}
	}
	//PDO的预处理
	public function getUserWithCountCheck(){

		$uid="admin";

		$stmt=$this->connect()->prepare("SELECT * FROM ctf WHERE user=? ");
		$stmt->execute([$uid]);

		if ($stmt->rowCount()) {
			while($row=$stmt->fetch()){
				return $row['user'];
			}
		}

	}
}