<?php 
	session_start();
	include_once '../../core/core.function.php';
	include_once '../../core/classes.class.php';

	echo create();
	function create(){
		$class_obj = new Classes();

		if (!$_POST['class'] || $_POST['class']=="") {
			return  displayWarning('Class is required and cannot be empty');
		}
		$class = $_POST['class'];
		$department_id = $_POST['department_id'];
		
		if ($class_obj->create($department_id, $class)){
			return displaySuccess($class.' added successfully');
			
		}
		else{
			return displayError('Unable to add');
		}
	}
?>