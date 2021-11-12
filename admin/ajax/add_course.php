<?php 
	session_start();
	include_once '../../core/core.function.php';
	include_once '../../core/courses.class.php';

	echo create();
	function create(){
		$course_obj = new courses();

		if (!$_POST['code'] || $_POST['code']=="") {
			return  displayWarning('course code is required and cannot be empty');
		}
		$code = $_POST['code'];
		$class_id = $_POST['class_id'];
		$title = $_POST['title'];
		
		if ($course_obj->check_course_existence($code)){
			return displayWarning($code.' already added');
			
		}

		if ($course_obj->create($class_id,$title,$code)){
			return displaySuccess($code.' added successfully');
			
		}
		else{
			return displayError('Unable to add');
		}
	}
?>