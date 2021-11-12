<?php 
	session_start();
	include_once '../../core/core.function.php';
	include_once '../../core/lecturers.class.php';

	echo create();
	function create(){
		$lecturer_obj = new lecturers();

		if (!$_POST['lecturer_id'] || $_POST['lecturer_id']=="") {
			return  displayWarning('lecturer is required and cannot be empty');
		}
		$course_id = $_POST['course_id'];
		$class_id = $_POST['class_id'];
		$lecturer_id = $_POST['lecturer_id'];
		
		if ($lecturer_obj->check_lecturer_course($lecturer_id,$course_id,$class_id)){
			return displayWarning('Courses assigned to lecturer already');
		}

		if ($lecturer_obj->add_lecturer_course($lecturer_id,$course_id,$class_id)){
			return displaySuccess('Courses assigned to lecturer successfully');	
		}
		else{
			return displayError('Unable to add');
		}
	}
?>