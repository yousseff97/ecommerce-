<?php


function affichenom()
{
    if(isset($_SESSION['clientname']))
    {
        echo $_SESSION['clientname'];
    }
    else
    {
        echo "login";
    }

}



function affichelien()
{
    if (isset($_SESSION['clientname'])) {
        if($_SESSION['admin']==0) {

            echo "login/client.php";
        }
        else
        {
            echo "login/adminpage.php";
        }
    } else {
        echo "login.php";
    }

}

function hidebasket()
{

    if(isset($_SESSION['admin']))
    {
        if($_SESSION['admin']==1)
        {

echo 'style="display:none"';
        }

    }

}