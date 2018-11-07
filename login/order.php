<?php

session_start();

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
include "setPrice.php";
if ($_SESSION['admin'] == false) {
    header('Location:../login.php');
}

include "logout.php";


include "logname.php";

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>order management</title>

    <link href="../layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="../hover.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
<nav class="navbar navbar-default" style="width: 80%;margin-left: 10%;background-image:url(../img/administra.png);background-attachment: fixed;
    background-position: center top;background-repeat: no-repeat;  ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="../img/logo.png" style="float: left ;padding-top: 3px" height="50px" width="60px"><a
                    class="navbar-brand" href="../index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li>

                    <form method="post" id="formlogout" style="padding-top: 15px">
                        <img src="../img/logout.png" style="width: 30px;height: 30px">
                        <input type="submit" name="logout" form="formlogout" value="log out"
                               style="border: none;background: none">
                    </form>

                </li>

                <li><a href="../<?php affichelien(); ?>"><img src="../img/admin.png"
                                                              style="width: 30px;height: 30px"> <?php affichenom(); ?>
                    </a></li>

            </ul>
        </div>
    </div>
</nav>

<div>

    <?php


    $con = mysqli_connect("localhost", "root", '', "bdcommande");

    $qry = "select * from commande";
    $result = mysqli_query($con, $qry);

    if (isset($_POST['confirmer'])) {
        $id = $_POST['confirmer'];
        $queryPay = "UPDATE `commande` SET `etat`='payé' WHERE id=$id";
        mysqli_query($con, $queryPay);
        header("Refresh:0");
    }

    if (isset($_POST['annuler'])) {
        $id = $_POST['annuler'];
        $queryPay = "UPDATE `commande` SET `etat`='annulée' WHERE id=$id";
        mysqli_query($con, $queryPay);
        header("Refresh:0");
    }


    ?>
    <div class="container" >
        <h2>Order List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>montant</th>
                <th>description</th>
                <th>état</th>
                <th>cmd</th>
            </tr>
            </thead>
            <tbody>

            <?php while ($row = mysqli_fetch_array($result)) {
                //   var_dump($row);
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['montant']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['etat']; ?></td>
                    <td>
                        <form method="post">
                            <button type="submit" style="background-color: #33a000" name="confirmer" value="<?php echo $row['id']; ?>">confirmer</button>
                            <button type="submit" style="background-color: #ce9300" name="annuler" value="<?php echo $row['id']; ?>">annuler</button>
                    </td>
                    </form>
                </tr>
            <?php } ?>


            </tbody>
        </table>
    </div>


    </table>


</div>
</body>
