<?php
session_start();
include "login/logname.php";
require "inscription_client/ConnectionDB.php";

$bd=ConnectionDB::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="hover.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightgray">


<nav class="navbar navbar-default"  style="width: 80%;margin-left: 10%;" >
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a class="navbar-brand" href="index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 3px">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="menu/combo.php" >Combo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/pizza.php">Pizza</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/sandiwch.php">Sandwich</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/healthyfood.php">Healthy food</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/drinks.php">Drinks</a></li>
                    </ul>
                </li>
                <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <li><a href="Stores.php">Stores</a></li>
                <li><a href="aboutus.php">About us</a></li>
            </ul>



            <form method="post" class="navbar-form navbar-left" style="padding-top: 5px">
                <div class="form-group">
                    <input type="text" name="searchName" class="form-control" placeholder="Search">
                </div>
                <button type="submit" name="search" class="btn btn-default">Search</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
           <li><a href="bask.php" <?php  hidebasket();   ?>><img src="img/basket.png" style="width: 30px;height: 30px" > basket</a></li>
                <li><a href="./<?php affichelien(); ?>"><img src="img/login.png" style="width: 30px;height: 30px" ><?php affichenom(); ?></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="parallax1">

    <div class="container" style="margin-top:-20px;">
        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="width:100%;height: 600px">
                <div class="hovereffect">
                    <img class="img-responsive" src="img/index/1.png" alt="">
                    <div class="overlay" style="padding-top: 200px">
                        <h1 style="font-size: 40px">Super Jambo Family combos</h1>
                        <p>
                            <a href="menu/combo.php">Check menu</a>

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container"  >
        <div class="menu">

            <div class="col-md-4 center-block" style="width: 25%;padding-left: 0px;padding-right: 0px">
                <div class="section-box-one" >
                    <!---->
                    <figure>
                        <h3><a href="menu/pizza.php">Pizza</a></h3>
                    </figure>
                    <img src="img/index/pizza.png" class="img-responsive" />
                </div>
            </div>

            <div class="col-md-4 center-block" style="width: 25%;padding-left: 0px;padding-right: 0px;">
                <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3><a href="menu/sandiwch.php">Sandwich</a></h3>
                    </figure>
                    <img src="img/index/sandwich.png" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="width: 25%;padding-left: 0px;padding-right: 0px;">
                <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3><a href="menu/healthyfood.php">Healthy Food</a></h3>
                    </figure>
                    <img src="img/index/salad.png" class="img-responsive"/>
                </div>
            </div>

            <div class="col-md-4 center-block" style="width: 25%;padding-left: 0px;padding-right: 0px;">
                <div class="section-box-one">
                    <!---->
                    <figure>
                        <h3><a href="menu/drinks.php">Drinks</a></h3>
                    </figure>
                    <img src="img/index/drink.png" class="img-responsive"/>
                </div>
            </div>
        </div>

    </div>

    <div class="parallax2" >
        <div class="container" >

            <div class="col-md-4 center-block" style="width: 50%;padding-left: 0px;padding-right: 0px;height: 500px">
                <div class="section-box-two" style="width: 100%;height: 600px">
                    <!---->
                    <figure>
                        <h3><a href="aboutus.php">About us</a></h3>
                    </figure>
                    <img src="img/index/about.png" class="img-responsive" />
                </div>
            </div>
            <div class="col-md-4 center-block" style="width: 50%;padding-left: 0px;padding-right: 0px;height: 500px">
                <div class="section-box-two" style="width: 100%;height: 600px">
                    <!---->
                    <figure>
                        <h3><a href="Stores.php">Our Stores</a></h3>
                    </figure>
                    <img src="img/index/store.png" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>

    <div class="parallax3" >
        <div align="center" style="padding-top: 50px">
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-google"></a>


        </div>
        <!--<span style="color: white">Copyright ©2018 GL2™, All Rights Reserved.</span>-->
    </div>

</div>

<?php
    if(isset($_POST['search']))
    {

    $recherche=$_POST['searchName'];
    //header('Location:../recherche.php?recherche='.$_POST['searchName']);
    echo("<script>location.href = 'recherche.php?recherche=$recherche';</script>"); // au lieu du header , car elle ne fonctionne pas dans notre cas puisque l'output a été modifié dans la ligne 53...
    }
?>







</body>
</html>