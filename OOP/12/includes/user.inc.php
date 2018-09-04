<?php  
class User extends Dbh{


	public function getALLUsers(){
		$sql="SELECT * FROM ctf";
		$result=$this->connect()->query($sql);
		$numRows=$result->num_rows;
		if ($numRows>0) {
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
	}
}