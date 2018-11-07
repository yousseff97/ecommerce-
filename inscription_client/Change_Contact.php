<?php
require "ConnectionDB.php";
session_start();
$bd = ConnectionDB::getInstance();
$id=$_SESSION['id'];
$Old_CN=$_POST["CN_new"];
$req="SELECT * FROM users WHERE id='$id'";
$res=$bd->query($req);
$res=$res->fetch(PDO::FETCH_BOTH);
    $req1 = "UPDATE  users SET CN='$Old_CN' WHERE id='$id'";
    $res1 = $bd->query($req1);

header("location:../login/client.php");

?>