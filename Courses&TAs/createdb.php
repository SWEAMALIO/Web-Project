<?php
include('constants.php');
function CreateDB()
{
	$db= new PDO('mysql:host='.HOST,USER,PASS);
        $db->exec("create database if not exists Cs_and_Ts");
}
CreateDB(DBNAME);
?>
