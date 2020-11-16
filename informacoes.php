<?php
$user_name = "etecia";
$password = "123456";
$host = "localhost";
$db_name = "dbfilmes";

$con = mysqli_connect($host,$user_name,$password,$db_name);

$sql = "SELECT * FROM tbtitulos;";

$result = mysqli_query($con,$sql);

$response = array();

while ($row = mysqli_fetch_array($result)) {
	array_push($response, array("Nome"=>$row['nome'],"Tipo"=>$row['tipo']));
}
	echo json_encode($response);
?>