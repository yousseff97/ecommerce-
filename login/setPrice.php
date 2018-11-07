<?php
/**
 * Created by PhpStorm.
 * User: loubou
 * Date: 13/04/2018
 * Time: 19:10
 */

//connects to the database
function conncet($qry)
{
    $con=mysqli_connect("localhost","root","","bdmenu");

    mysqli_query($con,$qry);

}

if(isset($_POST['setprix']))
{$con=mysqli_connect("localhost","root","","bdmenu");
$prix= (float) $_POST['prix'];
$idarticle=(int) $_POST['idarticle'];
$qry="UPDATE article SET prix=$prix WHERE id=$idarticle";

mysqli_query($con,$qry);


unset($_POST['setprix']);


}

if(isset($_POST['supprimer'])) {
    $idarticle=(int) $_POST['idarticle'];
$qry="delete from article where id=$idarticle";
conncet($qry);

unset($_POST['supprimer']);

}

