<?php 
	require_once('employee.php');
	echo 'Hello this is test.php';
	$tsukamoto = new Employee();
	$tsukamoto->setName('tsuakamoto');

    $tsukamoto->work();
?>
