<?php
/**
 * Created by PhpStorm.
 * User: loubou
 * Date: 14/04/2018
 * Time: 14:59
 */

//if logout button pressed
    if(isset($_POST['logout'])) {
        session_destroy();
        header('Location:../login.php');
    }



