<?php 
	session_start();
	include_once '../../core/core.function.php';
	include_once '../../core/lecturers.class.php';

	echo add_lecturer();
	function add_lecturer(){
		$lecturer_obj = new lecturers();

		if (!$_POST['lecturer_code'] || $_POST['lecturer_code']=="") {
			return  displayWarning('lecturer code is required and cannot be empty');
		}
		$lecturer_code = $_POST['lecturer_code'];
		$department_id = $_POST['department_id'];
		$fullname = $_POST['fullname'];
		
		if ($lecturer_obj->create($department_id,$lecturer_code,$fullname)){
			return displaySuccess($lecturer_code.' added successfully');
			
		}
		else{
			return displayError('Unable to add');
		}
	}
?>