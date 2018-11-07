<?php
session_start();
if($_SESSION['client']==false)
{
    header('Location:../login.php');
}

else {

    $montant = $_GET['total'];
    $desc = "";
    foreach ($_SESSION['basket'] as $cle => $row): {
        $desc = $desc . substr($row['nom'], 0, strlen($row['nom']) - 4) . ":" . $row['quantite'] . "\n";
    } endforeach;
    $con = mysqli_connect("localhost", "root", '', "bdcommande");
    $qry = "insert into commande (montant,description,etat) values ('$montant','$desc','en attente')";
    $result = mysqli_query($con, $qry);

    if (!empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "empty":
                $_SESSION['basket'] = array();
                $_SESSION['total'] = 0;
                break;
        }
    }

    header("Location:../menu/combo.php");

}

?>