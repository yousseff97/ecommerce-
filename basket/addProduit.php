<?php
ini_set("display_errors",0);error_reporting(0);
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 30/04/2018
 * Time: 16:52
 */
if(isset($_POST['submit']))
{
    if($_SESSION['basket']!=''){if ((array_key_exists ($_POST['idarticle'],$_SESSION['basket']))){
    $_SESSION['basket'][$_POST['idarticle']]["quantite"]+=intval($_POST['quantite']);}
else {$_SESSION['basket'][$_POST['idarticle']]['id']=$_POST['idarticle'];
    $_SESSION['basket'][$_POST['idarticle']]['prix']=$_POST['prix'];
    $_SESSION['basket'][$_POST['idarticle']]['nom']=$_POST['nom'];
    $_SESSION['basket'][$_POST['idarticle']]['image']=$_POST['image'];
    $_SESSION['basket'][$_POST['idarticle']]["quantite"]=intval($_POST['quantite']);}
}
else {
    $_SESSION['basket'][$_POST['idarticle']]['id']=$_POST['idarticle'];
    $_SESSION['basket'][$_POST['idarticle']]['prix']=$_POST['prix'];
    $_SESSION['basket'][$_POST['idarticle']]['nom']=$_POST['nom'];
    $_SESSION['basket'][$_POST['idarticle']]['image']=$_POST['image'];
    $_SESSION['basket'][$_POST['idarticle']]["quantite"]=intval($_POST['quantite']);}}