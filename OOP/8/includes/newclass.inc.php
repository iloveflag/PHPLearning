<?php 
class Newclass {
	//Properties and Methods goes here
	public $data="I am a property";
	public $error="This is the class called ".__CLASS__;
	public function __construct(){
		echo "This class has been instantiated<br>";
	}
	public function __toString(){
		echo "toString method:";
		return $this->error;
	}
	public function setNewProperty($newdata){
		$this->data=$newdata;
	}
	public function getProperty(){
		return $this->data;
	}
	public function __destruct(){
		echo "This is the end of the class";
	}
	
}



