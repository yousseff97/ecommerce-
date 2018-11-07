<?php
require "ConnectionDB.php";
$bd = ConnectionDB::getInstance();
session_start();
$id=$_SESSION['id'];
$Password=$_POST["E_pass"];
$Email=$_POST["E_mail"];
$req="SELECT * FROM users WHERE id='$id'";
$res=$bd->query($req);
$res=$res->fetch(PDO::FETCH_BOTH);
if($res['Password']==$Password) {
    $req1 = "UPDATE  users SET Email='$Email' WHERE id='$id'";
    $res1 = $bd->query($req1);
    }
    else {
        $_SESSION['VPE'] = "";

    }
header("location:../login/client.php");
    ?>