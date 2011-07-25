<?php

$pageName = "register";
require_once('utils/forms.php');
include('templates/header.php'); 

?>

<h3>Register</h3>
<p>Fill this form out to register as a member of the Recall Alert System. As a member, 
you can sign up for recall notifications.
</p>

<form id="registrationForm" action="registerMember.php" method="post">
	<p><?php echo rasRequiredLabel("Name", "memberName"); ?><br />
	<?php echo rasRequiredTextField(array(
		 'name' => 'memberName'
		,'maxlength' => 256
	)); ?></p>
	<input type="submit" value="Register" />
</form>

<script type="text/javascript">
(function($){
	// Register with JQuery's document ready function to ensure
	// that jQuery Validate plugin is validating the form.
	$(function(){
		$('#registrationForm').validate();
	});
})(jQuery);
</script>

<?php include('templates/footer.php'); ?>