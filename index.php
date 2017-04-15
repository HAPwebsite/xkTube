<?php

	// Translator by HAPwebsite LLC
	require_once('class.translator.php');
	if(isset($_GET['lang']))
		$translate = new Translator($_GET['lang']);
	else
		$translate = new Translator('en');

	// Require needed files to run this beast.
	require('set.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include('inc/head.php') ?>
<body>

<?php include_once('inc/nav.php') ?>

<?php include_once('inc/content.php') ?>	

<?php require('inc/footer.php') ?>	
</body>
</html>