<?php
session_start();

$retour = new StdClass();

$retour->success = isset($_SESSION['user_id']);
/*
if(isset($_SESSION['user_id'])){
	$retour->success = true;
}
else{
	$retour->success = false;
}
*/
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($retour);
