<?php 
	include_once '../../core/session.class.php';
	include_once '../../core/settings.class.php';
	include_once '../../core/core.function.php';
	echo register();
	function register()
	{
		$session = new Session();
		$setting_obj = new settings();
		if (isset($_POST['review'])) {
			$review = $_POST['review'];

			if ($setting_obj->update_review($review)) {
				return displaySuccess('Overview updated successfully');
			}
			else{
				return displayWarning('Unable to update.');
			}
		}
	}
?>