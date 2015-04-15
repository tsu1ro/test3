<?php
class Employee {
	private $name;
	private $state;
	private $job;


	public function work(){
	    echo 'hello, Iam working';
	}

	public function setName($_name){
			$name = $_name;
	}

	public function setState(){
		$state = 'working';
	}

	public function setJob($_job){
			$job = $_job;	
	}
}
?>

