<?php

function getAll($tbl){
	include('connect.php');

	$queryAll = 'SELECT * FROM '.$tbl;
	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem accessing this info.';
		return $error;
	}
}

function getSingle($tbl, $col, $value){
	include('connect.php');

	$querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$value;
	$runSingle = $pdo->query($querySingle);
	if($runSingle){
		return $runSingle;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}


?>