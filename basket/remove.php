<?php
if(isset($_POST['submit']))
{
unset($_SESSION['basket'][$_GET['idarticle']]);
//$_SESSION['basket']=array_values($_SESSION['basket']);
}