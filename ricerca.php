<?php
$host = '127.0.0.1';
$db_name = 'lacooperazione';
$db_user = 'root';
$db_password = '';
$con = new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$stmt = $con->prepare('SELECT comune FROM italy_cities where name like :keyword');
$stmt -> bindValue('keyword', '%'.$GET['term'].'%');
$stmt -> execute();
$result = array();
while ($comune = $stmt->fetch(PDO::FETCH_OBJ)) {
    array_push($result,$comune->name);
}
echo json_encode($result);