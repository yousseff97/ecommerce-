<?php
session_start();

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
include "setPrice.php";
if($_SESSION['admin']==false)
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
    <title>admin</title>

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
<nav class="navbar navbar-default"  style="width: 80%;margin-left: 10%;background-image:url(../img/administra.png);background-attachment: fixed;
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


<div class="parallax5" >
    <div class="container" style="margin-top:-20px;">
        <div align="center" style="padding-top: 50px">
            <form method="post" enctype="multipart/form-data" >

                <input type="file" name="image" required  class="button1">
                <p style="color: white">Type:
                    <INPUT TYPE ="radio" NAME ="menu" VALUE="combo" id="combo" CHECKED> combo
                    <INPUT TYPE ="radio" NAME ="menu" VALUE="pizza" id="pizza"> pizza
                    <INPUT TYPE ="radio" NAME ="menu" VALUE="sandwich" id="sandwich"> sandwich
                    <INPUT TYPE ="radio" NAME ="menu" VALUE="drink" id="drink"> drink
                    <INPUT TYPE ="radio" NAME ="menu" VALUE="healthy food" id="healthy food"> healthy food
                </p>

                <span class="pricebackground1">
                        <label for="prix1">Price</label>
                        <input type="number" step="any" name="prix" value="0" id="prix1">

                    </span>
                <input type="submit" name="submit" value="Upload an article" class="btn1">
            </form>
            <br><br>

            <a  class="btn1" href="order.php">to manage orders click here</a>

            <?php
                function saveArticle($name, $image, $prix ,$type)
                {
                    $con = mysqli_connect("localhost", "root", '', "mcd");
                    $qry = "insert into article (nom,image,prix,type) values ('$name','$image','$prix','$type')";
                    $result = mysqli_query($con, $qry);


                    if ($result) {
                        echo "<br/>Image uploaded.";

                    } else {
                        echo "<br/>Image not uploaded.";

                    }


                }
            ?>
        </div>
    </div>
</div>



<div class="parallax4" align="center">
    <div class="admin">
        <div class="container" style="margin-top:20px; margin-bottom: 20px">
            <?php

        if (isset($_POST['submit'])) {
            if (getimagesize($_FILES['image']['tmp_name']) == false) {

                echo "please select an image";
            } else {

                $image = addslashes($_FILES['image']['tmp_name']);
                $name = addslashes($_FILES['image']['name']);
                $image = file_get_contents($image);
                $image = base64_encode($image);
                saveArticle($name, $image, $_POST['prix'], $_POST['menu']);
            }
      }


            function displayimage()
            {

            $con = mysqli_connect("localhost", "root", '', "mcd");

            $qry = "select * from article";
            $result = mysqli_query($con, $qry);
            $i = 0;
            ?>
                <table align="center" style="margin-left:-30px">

                    <?php
                    $tab = array("", "", "");   //--------initialisation d'un tableau vide au début de chaque ligne----------



                    //---------fonction pour organiser les prix au dessous des images ; le but c'est d'éviter de mettre les cases des prix si on n'a pas d'image--------------


                    function organise($prix,$id,$nom)
                    { ?>

                        <?php if ($prix!="") { ?>
                        <td >
                            <form  method="post"  >
                                <p align="center" ><b><?php echo preg_replace("/.jpg|.png|.jpeg/","",$nom); ?></b></p>
                                <input hidden name="idarticle" value="<?php  echo $id ?>" ></input>
                                <label>Price: </label>
                                <input type="number" size="10" step="any" name="prix"  value="<?php echo $prix; ?>">
                                <input type="submit"  name="setprix" value="Set Price" class="btn1">
                                <button type="submit" name="supprimer" class="DeleteButton1"><img src="../img/trash.png" height="27px" width="25px"></button>

                            </form>
                        </td>
                    <?php }

                    } ?>

                    <?php



                    //--------Vider le tableau $tab--------
                    $tab[0] =array("id"=>"","prix"=>"","nom"=>"");
                    $tab[1] =array("id"=>"","prix"=>"","nom"=>"");
                    $tab[2] =array("id"=>"","prix"=>"","nom"=>"");


                    /*****************************************************erreur tfa7ej bka3ba************************/

                    $row = mysqli_fetch_array($result);
                    while ($row) {  //---------Tant que la ligne n'est pas vide ------------
                        ?>
                        <tr>

                            <?php  //------------On va mettre chaque ligne du tableau de notre base dans une case de notre nouveau tableau $tab-------------
                            for ($i = 0; $i < 3 && $row; $i++) {
                                $tab[$i]=array("id"=>$row[0],"nom"=>$row[1],"prix"=>$row[3]);

                                ?>
                                <td align="center">
                                    <img  height="300" width="400" src="<?php echo 'data:image;base64,'.$row[2] .''; ?>"
                                </td>
                                <?php
                                $row = mysqli_fetch_array($result);
                            }
                            ?>
                        </tr>
                        <tr>


                            <?php for($i=0;$i<3;$i++)
                                organise($tab[$i]["prix"],$tab[$i]["id"],$tab[$i]["nom"]);
                            ?>
                        </tr>

                        <?php

                        //--------Vider le tableau $tab--------

                        $tab[0] =array("id"=>"","prix"=>"","nom"=>"");
                        $tab[1] =array("id"=>"","prix"=>"","nom"=>"");
                        $tab[2] =array("id"=>"","prix"=>"","nom"=>"");
                    }
                    ?>

                </table>


                <?php
            }  //-----------Afficher finalement notre tableau contenant les champs de notre base------------

            displayimage();


            ?>
        </div>
    </div>
</div>


<div class="parallax6" >
    <div class="container" style="margin-top:-20px;">
        <div align="center" style="padding-top: 50px">
            <form  method="POST" action="Change_Email_Admin.php">
                <p style="color: white"><b>Change your Email</b></p>
                <br>
                <span class="pricebackground1">
                    <label >Password</label><input  type="password" name="E_pass_admin" required style="width: 30%" >
                </span>
                <br> <br> <br>
                <span class="pricebackground1">
                    <label>New Email</label><input  type="text" name="E_mail_admin" required style="width: 30%" >
                </span>
                <br> <br>
                <input type="submit" value="Submit" class="btn1"><input type="reset" value="Reset" class="btn2">
            </form>
            <form method="POST" action="Change_Password_Admin.php">
                <p style="color: white"><b>Change your Password</b></p>
                <br>
                <span class="pricebackground1">
                    <label>Old Password</label><input type="password" name="P_old_admin" required >
                </span>
                <br> <br> <br>
                <span class="pricebackground1">
                    <label>New Password</label><input type="password" name="P_new_admin" required >
                </span>
                <br><br>
                <input type="submit" value="Submit"  class="btn1"><input type="reset" value="Reset"  class="btn2">
            </form>
        </div>
    </div>
</div>








</body>


</html>






