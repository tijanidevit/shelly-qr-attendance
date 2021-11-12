<?php 
include_once '../../core/session.class.php';
include_once '../../core/lecturers.class.php';
include_once '../../core/core.function.php';

$session = new Session();
$lecturer_obj = new lecturers();

if (isset($_POST['lecturer_code'])) {
	$lecturer_code = $_POST['lecturer_code'];
	$password = md5($_POST['password']);

	if ($lecturer_obj->check_lecturer_code_existence($lecturer_code)) {
		if ($lecturer_obj->login($lecturer_code,$password)) {
			$lecturer = $lecturer_obj->fetch_lecturer($lecturer_code);
			$session->create_session('shelly_lecturer',$lecturer);
			echo 1;
		}
		else{
			echo displayWarning('Invalid Password');
		}
	}
	else{
		echo displayWarning('Lecturer Code not recognised');
	}
}

else{
	echo "No input made";
}
?>