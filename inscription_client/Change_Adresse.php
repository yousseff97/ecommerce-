<?php
require "ConnectionDB.php";
$bd = ConnectionDB::getInstance();
session_start();
$id=$_SESSION['id'];
$New_Adresse=$_POST["A_New"];
$req="SELECT * FROM users WHERE id='$id'";
$res=$bd->query($req);
$res=$res->fetch(PDO::FETCH_BOTH);
    $req1 = "UPDATE  users SET Adresse='$New_Adresse' WHERE id='$id'";
    $res1 = $bd->query($req1);

header("location:../login/client.php");
?>