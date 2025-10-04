<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Email Address', @$_POST['imObjectForm_49_1'], '', false);
	$form->setField('Order Number', @$_POST['imObjectForm_49_2'], '', false);
	$form->setField('Phone', @$_POST['imObjectForm_49_3'], '', false);
	$form->setField('Contact Reason', @$_POST['imObjectForm_49_4'], '', false);
	$form->setField('Add a note', @$_POST['imObjectForm_49_5'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'FA5908938E5C2F2CD83FDFC6A1E96EB0' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('', '', 'example@example.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file