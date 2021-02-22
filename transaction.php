<?php

session_start();
  $_SESSION['error'] = true;

  header('Location: index.php');

  exit();