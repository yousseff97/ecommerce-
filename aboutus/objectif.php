<?php
session_start();
include "../login/logname.php";
?>
<html>
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><head>
    <meta charset="UTF-8">
    <title>about us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="../layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="../hover.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script language="JavaScript1.2">



    //configure message
    message="OUR OBJECTIFS"
    //animate text in NS6? (0 will turn it off)
    ns6switch=1

    var ns6=document.getElementById&&!document.all
    mes=new Array();
    mes[0]=-1;
    mes[1]=-4;
    mes[2]=-7;mes[3]=-10;
    mes[4]=-7;
    mes[5]=-4;
    mes[6]=-1;
    num=0;
    num2=0;
    txt="";
    function jump0(){
        if (ns6&&!ns6switch){
            jump.innerHTML=message
            return
        }
        if(message.length > 6){
            for(i=0; i != message.length;i++){
                txt=txt+"<span style='position:relative;' id='n"+i+"'>"+message.charAt(i)+"</span>"};
            jump.innerHTML=txt;
            txt="";
            jump1a()
        }
        else{
            alert("Your message is to short")
        }
    }

    function jump1a(){
        nfinal=(document.getElementById)? document.getElementById("n0") : document.all.n0
        nfinal.style.left=-num2;
        if(num2 != 9){
            num2=num2+3;
            setTimeout("jump1a()",50)
        }
        else{
            jump1b()
        }
    }

    function jump1b(){
        nfinal.style.left=-num2;
        if(num2 != 0){num2=num2-3;
            setTimeout("jump1b()",50)
        }
        else{
            jump2()
        }
    }

    function jump2(){
        txt="";
        for(i=0;i != message.length;i++){
            if(i+num > -1 && i+num < 7){
                txt=txt+"<span style='position:relative;top:"+mes[i+num]+"'>"+message.charAt(i)+"</span>"
            }
            else{txt=txt+"<span>"+message.charAt(i)+"</span>"}
        }
        jump.innerHTML=txt;
        txt="";
        if(num != (-message.length)){
            num--;
            setTimeout("jump2()",50)}
        else{num=0;
            setTimeout("jump0()",50)}}
</script>
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
            <img src="../img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a  class="navbar-brand" href="../index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 3px">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../menu/combo.php">Combo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../menu/pizza.php">Pizza</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../menu/sandiwch.php">Sandwich</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../menu/healthyfood.php">Healthy food</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../menu/drinks.php">Drinks</a></li>
                    </ul>
                </li>
                <li ><a href="../Stores.php">Stores</a></li>
                <li class="active"><a href="../aboutus.php">About us <span class="sr-only">(current)</span></a></li>
            </ul>



            <form method="post" class="navbar-form navbar-left" style="padding-top: 5px">
                <div class="form-group">
                    <input type="text" name="searchName" class="form-control" placeholder="Search">
                </div>
                <button type="submit" name="search" class="btn btn-default">Search</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="../bask.php" <?php  hidebasket();   ?>><img src="../img/basket.png" style="width: 30px;height: 30px" > basket</a></li>
                <li><a href="../login.php"<?php affichelien();   ?>"><img src="../img/login.png" style="width: 30px;height: 30px" ><?php affichenom(); ?></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="parallax11" style="margin-top: -19px;">
    <div class="leader">
        <h1 class="jomla"><strong><div id="jumpx"></div></strong></h1><hr>
        <script>
            if (document.all||document.getElementById){
                jump=(document.getElementById)? document.getElementById("jumpx") : document.all.jumpx
                jump0()
            }
            else
                document.write(message)
        </script>
        <table >
            <tr class="cell"><td><a href="../aboutus.php" target="_self" class="titre">ABOUT US</a><hr></td></tr>
            <tr id="cl"><td><a href="leaders.php" target="_self" class="titre">OUR LEADERS</a><hr></td></tr>
            <tr class="cell"><td><a href="objectif.php" target="_self" class="titre">OUR OBJECTIFS</a></td></tr>
        </table>
        <br>
        <div style="width: 900px; background-color: black; opacity: 0.8">
            <h2 class="ital" ><I>Ever wonder what MCDONAS stands for?</I></h2><br><!-- ken maajbetkomch lfekra nahiwha -->
            <br>
            <div id="logop" >
                <img src="../img/aboutus/persil.jpg" alt="Avatar" class="avatar">
                <span id="mcd">
                     <script language="JavaScript1.2">
                    function initArrays() {
                        this.length = initArrays.arguments.length;
                        for (var j = 0; j < this.length; j++) {
                            this[j] = initArrays.arguments[j];
                        }
                    }

                    var ctext1 = 'MCDONAS';
                    var y = 0;
                    var color1 = new initArrays(
                        "white",
                        "red"
                    );

                    {
                        document.write('<span id="cr">'+ctext1+'</span>');
                    }
                    function chcolors(){
                        {
                            document.all.cr.style.color = color1[y];
                        }
                        (y < color1.length-1) ? y++ : y = 0;
                    }
                    setInterval("chcolors()",1000);
                </script>
                </span>
                <p class="para">parsley in Arabic dialect</p>
            </div>

            <p class="para" >
                <br>MCDONAS was given its name by the Corporation's founder, Sokkah Ahmed, as an expression of his limitless
                love for humans and the environment and a desire to establish a group consisting of people committed
                to that ideal.
                This name is symbolic of healthy and balanced food, which represents the image of the corporation</p>
            <br>
        </div>
    </div>
</div>
<div style="margin-left: 12%">
    <div style="width: 900px; background-color: black; opacity: 0.8">
        <h2 class="ital" ><I>The MCDONAS Corporate Motto
                <script language="JavaScript1.2">
                    function initArray() {
                        this.length = initArray.arguments.length;
                        for (var i = 0; i < this.length; i++) {
                            this[i] = initArray.arguments[i];
                        }
                    }

                    var ctext = '"Making people happy through food"';
                    var x = 0;
                    var color = new initArray(
                        "red",
                        "white"
                    );

                    {
                        document.write('<span id="c">'+ctext+'</span>');
                    }
                    function chcolor(){
                        {
                            document.all.c.style.color = color[x];
                        }
                        (x < color.length-1) ? x++ : x = 0;
                    }
                    setInterval("chcolor()",1000);
                </script>
            </I></h2><br>
        <p class="para" style="background-color: black; opacity: 0.8; width: 900px">We provide "delicious, safe, and healthy food" with "cordial and friendly service.
            Following the opening of its first store, the company rapidly grew into a nationwide franchise thanks to a
            combination of its menu of delicious, freshly made food and cordial and friendly service.<br><br>

            From the start, MCDONAS has pursued "delicious food" as its primary objective.
            Accordingly, its policy is to never leave food sitting out, but prepare everything to order in accordance
            with its "after-order" cooking system. The company has successively created a wide range of unique products.
            In addition to "delicious taste," MCDONAS is also
            committed to the "health, safety and well-being" of its customers. Seeking to further contribute to the health
            of its customers, the company has supplied all of its stores with Fresh Vegetables, which are
            grown by contracted domestic farmers using methods that do not rely on pesticides and chemical fertilizers.<br><br>

            MCDONAS stores aim to provide delicious taste, health and happiness to customers and local communities,
            while also serving as a place where customers can recharge themselves for tomorrow</p>
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
<?php
if(isset($_POST['search']))
{

    $recherche=$_POST['searchName'];
    //header('Location:../recherche.php?recherche='.$_POST['searchName']);
    echo("<script>location.href = '../recherche.php?recherche=$recherche';</script>"); // au lieu du header , car elle ne fonctionne pas dans notre cas puisque l'output a été modifié dans la ligne 53...
}
?>

</body>

</html>