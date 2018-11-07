<?php
session_start();

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
include "setPrice.php";
//print_r($_SESSION);
if($_SESSION['client']==false)
{
    header('Location:../login.php');
}
include "logout.php";
include "logname.php";
if(isset($_SESSION['NP'])){
    unset($_SESSION['NP']);
    echo "<script type='text/javascript'> alert('The New Password Is Invalid !');</script>";
}
if(isset($_SESSION['VPE'])){
    unset($_SESSION['VPE']);
    echo "<script type='text/javascript'> alert('Password Incorrct, Please Verify Your Password');</script>";
    }
?>





<html>

<head>
    <meta charset="UTF-8">
    <title>client</title>

    <link href="../layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="../hover.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-color: lightgray">
<?php

if(isset($_SESSION['NP'])){
    unset($_SESSION['NP']);
    echo "<script type='text/javascript'> alert('The New Password Is Invalid !');</script>";
}
if(isset($_SESSION['VPE'])){
    unset($_SESSION['VPE']);
    echo "<script type='text/javascript'> alert('Password Incorrct, Please Verify Your Password');</script>";
}
?>
<nav class="navbar navbar-default"  style="width: 80%;margin-left: 10%;background-image:url(../img/client.png);background-attachment: fixed;
    background-position: center top;background-repeat: no-repeat;  ">
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="../img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a class="navbar-brand" href="../index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">





            <ul class="nav navbar-nav navbar-right">
                <li>

                    <form method="post"   id="formlogout" style="padding-top: 15px">
                        <img src="../img/logout.png" style="width: 30px;height: 30px" >
                        <input type="submit" name="logout" form="formlogout" value="log out" style="border: none;background: none">
                    </form>

                </li>

                <li><a href="../<?php  affichelien();   ?>"><img src="../img/admin.png" style="width: 30px;height: 30px" > <?php affichenom(); ?></a></li>

            </ul>
        </div>
    </div>
</nav>


<div class="parallax8" >
    <div class="container" style="margin-top:-20px;">
        <div align="center" style="padding-top: 50px">


            <form  method="POST" action="../inscription_client/Change_Email.php">
                <p style="color: white"><b>Change your Email</b></p>
                <br>
                <span class="pricebackground1">
                    <label >Password</label><input  type="password" name="E_pass" required style="width: 30%" >
                </span>
                <br> <br> <br>
                <span class="pricebackground1">
                    <label>New Email</label><input  type="text" name="E_mail" required style="width: 30%" >
                </span>
                <br> <br>
                <input type="submit" value="Submit" class="btn1"><input type="reset" value="Reset" class="btn2">
            </form>



            <form method="POST" action="../inscription_client/Change_Password.php">
                <p style="color: white"><b>Change your Password</b></p>
                <br>
                <span class="pricebackground1">
                    <label>Old Password</label><input type="password" name="P_old" required >
                </span>
                <br> <br> <br>
                <span class="pricebackground1">
                    <label>New Password</label><input type="password" name="P_new" required >
                </span>
                <br><br>
                <input type="submit" value="Submit"  class="btn1"><input type="reset" value="Reset"  class="btn2">
            </form>



            <form method="POST" action="../inscription_client/Change_Contact.php">
                <p style="color: white"><b>change your Contact Number</b></p>
                <br>
                <span class="pricebackground1">
                    <label >New Number</label>
                    <input type="number" step="any"  name="CN_new" required>
                </span>
                <br><br>
                <input type="submit" value="Submit" class="btn1">
                <input type="reset" value="Reset" class="btn2">
            </form>


            <form method="POST" action="../inscription_client/Change_Adresse.php">
                <p style="color: white"><b>change your Adresse</b></p>
                <br>
            <span class="pricebackground1">
                <label>New Adresse </label><input type="text" name="A_New" required >
                </span>
                <br><br>
                <input type="submit" value="Submit" class="btn1"><input type="reset" value="Reset" class="btn2">
            </form>

        </div>
    </div>
</div>











</body>


</html>






