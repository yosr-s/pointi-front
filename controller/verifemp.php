<?php 

require_once('../model/CnxEmp.class.php');
$salarie = new CnxSalarie($_POST['email'],$_POST['password']);
$salarie->verifier();
//header('location:../index.php');
echo "oui";

?>
