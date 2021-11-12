<?php 
	include_once '../../core/session.class.php';
	include_once '../../core/admin.class.php';
	include_once '../../core/core.function.php';
	echo register();
	function register()
	{
		$session = new Session();
		$admin_obj = new admin();
		if (isset($_POST['username'])) {
			$username = $_POST['username'];
			$password = md5($_POST['password']);


			if (! $admin_obj->check_username($username)) {
				return displayWarning('Username not recognised!');
			}
			if ($admin_obj->login($username,$password)) {
				$session->create_session('shelly_admin','admin');
				return 1;
			}
			else{
				return displayWarning('Invalid Login Credentials.');
			}
		}
	}
?>