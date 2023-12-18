<?php 

session_start();

if(!($_SESSION['login'] )){
    header('location:../index.html') ;
}

session_destroy();

header('location:../index.html') ;

?>