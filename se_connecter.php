<?php
session_start();

include 'bdd.php';

$connect = new StdClass();

$pseudo = $_POST['pseudo']; 
$pass = $_POST['password'];


$query = ('SELECT * FROM js WHERE pseudo = ? AND password = ?');
$stmt = $bdd->prepare($query);

$stmt->execute(array($pseudo,$pass));

$id = $stmt->fetch();

$userExist = $stmt->rowCount();

if(!empty($pseudo) || !empty($pass)){
	if($userExist == 1){
	$connect->success = 1;
	$_SESSION['user_id'] = $id['id'];
	}
	else{
	$connect->success = 2;
	}
	
}else{
	$connect->success = 3;
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($connect);
