<?php
session_start();
include "login/logname.php";
include "basket/remove.php";
$description="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>basket</title>
    <link href="layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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
                        <li><a href="menu/combo.php">Combo</a></li>
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
                <li class="active"><a href="bask.php" <?php  hidebasket();   ?>><img src="img/basket.png" style="width: 30px;height: 30px" > basket <span class="sr-only">(current)</span></a></li>
                <li><a  href="<?php affichelien();   ?>""><img src="img/login.png" style="width: 30px;height: 30px" > <?php affichenom(); ?></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "empty":
            $_SESSION['basket']=array();
            $_SESSION['total']=0;
            break;
    }
}
?>


<div >
    <div id="shopping-cart" style="margin-left: 3%">
       <a id="btnEmpty" href="bask.php?action=empty" style="margin-left:70% ; color: #ce9300;font-weight: bold">Empty Cart</a>

        <table style="text-align: center ;width: 60%;margin-left: 20% ">
        <?php

        $tab = array("", "", "");
     function remove($id)
        {unset($_SESSION['basket'][$id]);
            $_SESSION['basket']=array_values($_SESSION['basket']);


        }

        function organise($prix,$id,$nom,$quantity)
        {
        if ($prix!="") { ?>
        <td >
            <form  method="post" action="<?=$_SERVER['PHP_SELF']?>?idarticle=<?=$id?>"  >
                <p align="center" ><b><?php echo preg_replace("/.jpg|.png|.jpeg/","",$nom); ?></b></p>
                <input hidden name="idarticle" value="<?php  echo $id ?>" >
                <p align="center">Price: <?php echo $prix; ?></p>
                <p align="center">Quantity: <?php echo $quantity; ?></p>
                <center>
           <input type ="submit" name="submit" value="Remove Item" class="btnRemoveAction" >
                </form>
     </td><?php }

            }


    ?>


                <?php  //------------On va mettre chaque ligne du tableau de notre base dans une case de notre nouveau tableau $tab-------------
                if(isset($_SESSION['basket'])&&($_SESSION['basket']!=array())){
    $total=0;
    $i=1;
                    foreach ( $_SESSION['basket'] as $cle => $row ): {  //---------Tant que la ligne n'est pas vide ------------
                        ?>
                        <tr>

                        <td align="center">
                            <img height="200px" width="250px"
                                 src="<?php echo 'data:image;base64,' . $row['image'] . ''; ?>"
                        </td>

                            <?php
                        organise($row['prix'], $row['id'], $row['nom'],$row['quantite']);
    $total+=floatval($row['prix'])*intval($row['quantite']);
    $description=$row['nom']." qte:".$row['quantite']." ".$description;
    $_SESSION['total']=$total;
                                ?>

                                <?php

    if ($i % 3== 0){echo "</tr>";}
                                $i++;
                            }                endforeach;?>
                        </tr>
    </div>
    <tr><td></td><td><h3 style="font-family: Aldhabi ; font-size: xx-large ">Total : <?php echo $total." dt" ; ?></h3></td></tr>
    </table>
    <br>







    <a href="basket/commande.php?total=<?=$total?>&action=empty" style="margin-left: 29%;color:#ce9300;font-weight: bold">ORDER !</a><?php }?>
    <a href="menu/combo.php"style="margin-left: 29%; color:black;font-weight: bold">pursue your purchases</a>
    <br><br><br><br>


    <?php
    if(isset($_POST['search']))
    {

        $recherche=$_POST['searchName'];
        //header('Location:../recherche.php?recherche='.$_POST['searchName']);
        echo("<script>location.href = 'recherche.php?recherche=$recherche';</script>"); // au lieu du header , car elle ne fonctionne pas dans notre cas puisque l'output a été modifié dans la ligne 53...
    }
    ?>
</div>
</body>
</html>