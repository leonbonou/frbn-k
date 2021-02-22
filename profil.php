<?php
session_start();


if(isset($_GET['lang'])){
  if($_GET['lang'] == 'fr'){
    $_SESSION['lang'] = 'fr';
  }
  if($_GET['lang'] == 'ptg'){
    $_SESSION['lang'] = 'ptg';
  }
  if($_GET['lang'] == 'esp'){
    $_SESSION['lang'] = 'esp';
  }
}

isset($_SESSION['lang']) ? $lang = $_SESSION['lang'] : $lang = 'fr';

if(!isset($_SESSION['user'])) header('Location: login.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HSBC France</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <link href="build/css/new.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle" style="margin-top: 0; padding-top: 0;">
                <img src="img/logo.jpg" alt="HSBC" style="height: 60px; margin-top:0">
              </div>


              <?php if($lang == 'fr') : ?>

                <ul class="nav navbar-nav navbar-right">

                
                  <li class="">
                    <a href="javascript:;" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span style="color: aliceblue;" class="btn btn-dark btn-sm">Langue</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="?lang=fr"><i class="fa fa-flag"></i> Francais</a></li>
                      <li><a href="?lang=ptg"><i class="fa fa-flag"></i> Português</a></li>
                      <li><a href="?lang=esp"><i class="fa fa-flag"></i> Espagnol</a></li>
                    </ul>
                  </li>

                  <!--
                    <a href="?lang=fr" style="margin-right: 5px"><img src="img/france.png" alt="" height=20></a>
                    <a href="?lang=ltn"><img src="img/italy.png" alt="" height=20></a>

                  -->

                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/profil.jpg" alt=""><span style="color: aliceblue;">Albert Anton</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href=""><i class="fa fa-user pull-right"></i> Mon profil</a></li>
                      <li><a href="trans.php"><i class="fa fa-credit-card pull-right"></i> Transfert des fonds</a></li>
                      <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Se déconnecter</a></li>
                    </ul>
                  </li>
                </ul>


              <?php elseif($lang == 'ptg')  : ?>
                
                <ul class="nav navbar-nav navbar-right">
                
                  <li class="">
                    <a href="javascript:;" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span style="color: aliceblue;" class="btn btn-dark btn-sm">Lingua</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="?lang=fr"><i class="fa fa-flag"></i> Francais</a></li>
                      <li><a href="?lang=ptg"><i class="fa fa-flag"></i> Português</a></li>
                      <li><a href="?lang=esp"><i class="fa fa-flag"></i> Espagnol</a></li>
                    </ul>
                  </li>

                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt=""><span style="color: aliceblue;">Albert Anton</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href=""><i class="fa fa-user pull-right"></i> Meu perfil</a></li>
                      <li><a href="trans.php"><i class="fa fa-credit-card pull-right"></i> Transferência de dinheiro</a></li>
                      <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Esci</a></li>
                    </ul>
                  </li>
                </ul>

              <?php else : ?>
                <ul class="nav navbar-nav navbar-right">
                
                  <li class="">
                    <a href="javascript:;" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span style="color: aliceblue;" class="btn btn-dark btn-sm">Lengua</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="?lang=fr"><i class="fa fa-flag"></i> Francais</a></li>
                      <li><a href="?lang=ptg"><i class="fa fa-flag"></i> Português</a></li>
                      <li><a href="?lang=esp"><i class="fa fa-flag"></i> Espagnol</a></li>
                    </ul>
                  </li>

                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt=""><span style="color: aliceblue;">Albert Anton</span>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="logout.php"><i class="fa fa-user pull-right"></i>Mi perfil</a></li>
                      <li><a href="trans.php"><i class="fa fa-credit-card pull-right"></i> Transferencia de fondos</a></li>
                      <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Desconectarse</a></li>
                    </ul>
                  </li>
                </ul>
              <?php endif; ?>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->






        <?php if($lang == 'fr') : ?>
          
          <?php include 'translate/profilF.php'; ?>

        <?php elseif($lang == 'ptg')  : ?>

          <?php include 'translate/profilP.php'; ?>

        <?php else : ?>

          <?php include 'translate/profilE.php'; ?>

        <?php endif; ?>

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>

      <?php unset($_SESSION['error']); ?>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
