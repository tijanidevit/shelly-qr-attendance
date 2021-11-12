<?php 
	session_start();
	include_once '../../core/core.function.php';
	include_once '../../core/courses.class.php';

	echo edit_course_material();
	function edit_course_material(){
		$course_obj = new courses();

		if (!$_POST['title'] || $_POST['title']=="") {
			return  displayWarning('Material title is required and cannot be empty');
		}
		// $course_section_id = $_POST['course_section_id'];
		$title = $_POST['title'];
		$video_link = $_POST['video_link'];
		$fiddle = $_POST['fiddle'];
		$duration = $_POST['duration'];
		$description = $_POST['description'];
		$id = $_POST['id'];

		$image = $_POST['old_image'];
		if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
			$image = upload_file($_FILES['image'],'../../uploads/course/image/');
		}
		

		if ($course_obj->edit_course_material($title,$video_link,$image,$fiddle,$duration,$description,$id)){
			set_flash('success',$title.' edited successfully');
			return displaySuccess($title.' edited successfully');
		}
		else{
			return displayError('Unable to edit');
		}
	}
?>