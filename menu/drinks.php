<?php
session_start();
include "../login/logname.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>drinks</title>
    <link href="../layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <img src="../img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a class="navbar-brand" href="../index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 3px">
                <li class="active"><a>Menu <span class="sr-only">(current)</span></a></li>
                <li><a href="../Stores.php">Stores</a></li>
                <li><a href="../aboutus.php">About us</a></li>
            </ul>




            <form method="post" class="navbar-form navbar-left" style="padding-top: 5px">
                <div class="form-group">
                    <input type="text" name="searchName" class="form-control" placeholder="Search">
                </div>
                <button type="submit" name="search" class="btn btn-default">Search</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="../bask.php" <?php  hidebasket();   ?>><img src="../img/basket.png" style="width: 30px;height: 30px" > basket</a></li>
                <li><a href="../<?php affichelien();   ?>"><img src="../img/login.png" style="width: 30px;height: 30px" ><?php affichenom(); ?></a></li>
            </p>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<nav class="navbar navbar-default sidebar" role="navigation" style="margin-left: 10%; background-image: url(../img/background/menu3.png); background-repeat: no-repeat;background-position:center bottom">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="combo.php">combo <img src="../img/combo.png" style="width: 25px;height: 25px" align="right"></a></li>
                <li ><a href="pizza.php">pizza <img src="../img/pizza.png" style="width: 25px;height: 25px" align="right"></a></li>
                <li ><a href="sandiwch.php">sandwich <img src="../img/sandiwch.png" style="width: 25px;height: 25px" align="right"></a></li>
                <li ><a href="healthyfood.php">healthy food <img src="../img/healthy.png" style="width: 25px;height: 25px" align="right"></a></li>
                <li class="active"><a href="drinks.php">drinks <img src="../img/drink.png" style="width: 25px;height: 25px" align="right"></a></li>

            </ul>
        </div>
    </div>
</nav>


<?php
include "../menu.php";
displayArticle("drink");
if(isset($_POST['search']))
{

    $recherche=$_POST['searchName'];
    //header('Location:../recherche.php?recherche='.$_POST['searchName']);
    echo("<script>location.href = '../recherche.php?recherche=$recherche';</script>"); // au lieu du header , car elle ne fonctionne pas dans notre cas puisque l'output a été modifié dans la ligne 53...
}
?>



</body>
</html>