<?php
session_start();
$r = $_GET['r'];
$c = $_GET['c'];

$map= $_SESSION['map'];



if($map[$r][$c]==1){
$map[$r][$c]=4;
} 
if($map[$r][$c]==0){
$map[$r][$c]=2;
} 

 $_SESSION['map']=$map;
 
 header('location: map.php');
?>