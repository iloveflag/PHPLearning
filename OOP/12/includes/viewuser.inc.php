<?php  
class ViewUser extends User{


	public function showALLUsers(){
		$datas=$this->getALLUsers();
		foreach ($datas as $data) {
			echo $data['user']."<br>";
			echo $data['password'];
		}
	}
}



