<?php 
	include_once '../../core/session.class.php';
	include_once '../../core/courses.class.php';
	include_once '../../core/core.function.php';
	echo edit_course_section();
	function edit_course_section()
	{
		$session = new Session();
		$course_obj = new Courses();
		if (isset($_POST['course_section'])) {
			$course_section = $_POST['course_section'];
			$id = $_POST['id'];

			if ($course_obj->edit_course_section($course_section,$id)) {
				return displaySuccess('Curriculum updated successfully');
			}
			else{
				return displayWarning('Unable to update.');
			}
		}
	}
?>