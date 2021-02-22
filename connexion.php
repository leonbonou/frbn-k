<?php

session_start();

if($_POST){

  $login = $_POST['login'] ? $_POST['login'] : null;
  $password = $_POST['password'] ? $_POST['password'] : null;

  if($login == '@lbert1956' && $password =='@lb1956@nt' ){
    $_SESSION['user'] = true;

    header('Location: index.php');
  
    exit();
  }else{

    $_SESSION['flash']['danger'] = "incorrect login or password. Please try again";
    header('Location: index.php');

    exit();

  }
}