<?php

 require "ConnectionDB.php";
 $bd = ConnectionDB::getInstance();
$FName=$_POST['F_Name'];
$LName=$_POST['L_Name'];            
$Email=$_POST['Email'];
$day=$_POST["JJ"];
$month=$_POST['MM'];
$year=$_POST['YYYY'];
$date_p=$day.'/'.$month.'/'.$year;
$Password=$_POST['Password'];
$C_Number=$_POST['C_Number'];
$Adresse=$_POST['Adresse'];
$req_verif="SELECT * FROM users WHERE Email='$Email'";
$res=$bd->query($req_verif);

if ($res->fetchColumn() > 0)
{
    $_SESSION['Check_Email']="";
 	header("location: index.php");

}
else{
	$req_ins=$bd->prepare("INSERT INTO users(FName,LName,Email,date_p,Password,CN,Adresse)  VALUES (:FName,:LName,:Email,:date_p,:Password,:C_Number,:Adresse)");
	$req_ins->execute(array('FName' => $FName,
			'LName' => $LName,
			'Email' =>$Email,
			'date_p' => $date_p,
			'Password' => $Password,
			'C_Number' => $C_Number,
			'Adresse' => $Adresse)
			);
	if(!$req_ins){
		die(print_r($bd->errorInfo()));
	}

	header("Location:../login.php");
}

?>





