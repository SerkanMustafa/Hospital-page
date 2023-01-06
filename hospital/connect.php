<?php


 try{
     $db = new PDO("mysql:host=localhost;
     dbname=hospital; charset=utf8",'root', '');
}catch(Exception $e){
 echo $e->getMessage();
 }
// nacin2


$host="localhost";
$user="root";
$password="";
$db="hospital";

$connect=mysqli_connect($host,$user,$password,$db);

if($connect)
{
   //echo "Connect";
}

if(!isset($_SESSION)){session_start();}
?>

