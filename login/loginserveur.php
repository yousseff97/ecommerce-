<?php
session_start();
//verifier si l'utilisateur peut se connecter ou pas
function login($email,$pass)
{
    $_bdd = new PDO("mysql:host=localhost;dbname=mcd", "root", "");
    $res=$_bdd->prepare("select * from users WHERE email=:email and password=:pass");
    $res->execute(array(':email'=>$email,':pass'=>$pass));
    $affich=$res->fetch();

    if($affich!=false)
    {
        $_SESSION['clientname']=$affich['FName'];
        $_SESSION['admin']=$affich['admin'];
        $_SESSION['id']=$affich['id'];
        if ($affich['admin']==1)
        {
            $_SESSION['admin']=true;
            header('Location:login/adminpage.php');
        }
        else
        {
            $_SESSION['client']=true;
            header('Location:login/client.php');
        }

    }
    else
    {
        ?>
        <script type="text/javascript" >

            alert("please check your email or password");
        </script>

        <?php

    }

}

if(isset($_POST['btnlogin']))
{
    login($_POST['email'],$_POST['key']);
}