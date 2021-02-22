<?php
session_start();

if(isset($_GET['lang'])){
  if($_GET['lang'] == 'fr'){
    $_SESSION['lang'] = 'fr';
  }
  if($_GET['lang'] == 'ltn'){
    $_SESSION['lang'] = 'ltn';
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

    <title>UBI Banca </title>

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
                <img src="img/UBI.jpg" alt="UBI" style="height: 60px; margin-top:0">
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
                    <li><a href="?lang=ltn"><i class="fa fa-flag"></i> Italiano</a></li>
                  </ul>
                </li>

                <!--
              <a href="?lang=fr" style="margin-right: 5px"><img src="img/france.png" alt="" height=20></a>
              <a href="?lang=ltn"><img src="img/italy.png" alt="" height=20></a>

              -->

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><span style="color: aliceblue;">Lucas PROST</span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Se déconnecter</a></li>
                  </ul>
                </li>
              </ul>


              <?php else : ?>
                
                <ul class="nav navbar-nav navbar-right">
                
                <li class="">
                  <a href="javascript:;" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span style="color: aliceblue;" class="btn btn-dark btn-sm">Lingua</span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="?lang=fr"><i class="fa fa-flag"></i> Francais</a></li>
                    <li><a href="?lang=ltn"><i class="fa fa-flag"></i> Italiano</a></li>
                  </ul>
                </li>

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><span style="color: aliceblue;">Lucas PROST</span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Esci</a></li>
                  </ul>
                </li>
              </ul>

              <?php endif; ?>



            </nav>
          </div>
        </div>
        <!-- /top navigation -->




        <?php if($lang == 'fr') : ?>

        <!-- page content -->
        <div class="right_col" role="main">

          <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                 <strong><i class="fa fa-warning"></i> Compte bloqué</strong>
                 <p>Vous ne pouvez pas effectuer de transaction.</p>
                </div>
          <?php endif; ?>
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top green">Compte actif</span>
              <div class="count">UBI Banca - <span class="green">Actif</span></div>
              <span class="count_bottom"> Lucas PROST</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Compte Privé</span>
              <div class="count green">1.300.919,29 €</div>
              <span class="count_bottom"> 1031.40.41.2</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Compte de gestion</span>
              <div class="count">341.00 €</div>
              <span class="count_bottom">1031.40.42.6</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Compte de gestion</span>
              <div class="count">120.00 €</div>
              <span class="count_bottom"> 1031.40.43.2</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Compte d'epargne</span>
              <div class="count">0 €</div>
              <span class="count_bottom"> 1031.40.45.0</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-bars"></i> Compte privé </h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">


                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="padding: 5px 2px 15px 2px ;">
                    <li role="presentation" class="active" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" title="Relevé de compte" aria-expanded="true">Relevé</a>
                    </li>
                    <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" title="Mouvements futurs" aria-expanded="false">Mouvements</a>
                    </li>
                    <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" title="Autres informations" aria-expanded="false">Autres</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <br> <br>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-6">
                              <h3>Relevé de compte - Solde</h3>
                          <table class="table">
                            <tr>
                              <th>IBAN</th>
                              <td>IT60 X054 2762 1212 4123 4111 412</td>
                            </tr>

                            <tr>
                              <th>Titulaire</th>
                              <td>Lucas PROST</td>
                            </tr>
                            
                          </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h3>1.300.919,29 €</h3>
                          <table class="table table-striped">
                            <tr>
                              <th>Disponible actuellement</th>
                              <td>1.311.410,57 €</td>
                            </tr>

                            <tr>
                              <th>Evaluation depuis 1 mois</th>
                              <td>10.491,28 € (-0.8)</td>
                            </tr>
                            
                            <tr>
                              <th>Solde prév. a la fin du mois</th>
                              <td>1.300.919,29 €</td>
                            </tr>
                            
                          </table>
                        </div>
                      </div>

                      <div>
            <h3>Relevé de compte</h3>
            <table id="datatable" class="table table-striped table-bordered">
              <thead style="background-color: #d6d9fa; color: #4480db">
                <tr>
                  <th>Date</th>
                  <th>Libellé d'écriture</th>
                  <th>Montant</th>
                  <th>Solde</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>20 Août 2015</td>
                  <td>Payement de salaire</td>
                  <td>-800.00</td>
                  <td>303.736,00 €</td>
                </tr>
                <tr>
                  <td>13 Novembre 2012</td>
                  <td>Aide de financement du projet ASPAIC</td>
                  <td>-60.00</td>
                  <td>572.811.00 €</td>
                </tr>
                <tr>
                  <td>10 Novembre 2009</td>
                  <td>Soutien au projet ASPAIC</td>
                  <td>-100.00</td>
                  <td>424.372,29 €</td>
                </tr>
              </tbody>
            </table>
          </div>
                      
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    
                    <div class="row">
                    <br> <br> <br>
                      <div class="col-md-6">
                      <a href="transaction.php" class="btn btn-primary btn-sm"> <i class="fa fa-send-o"></i> Transfert des fonds</a>  
                      </div>
                      <div class="col-md-6">
                        
                    <h2 class="text-primary float-right"><i class="fa fa-money"></i> Solde: 1.300.919,29 €</h2>
                      </div>
                    </div>
                    <br><br>
                    <div>
            <h3>Relevé de compte</h3>
            <table id="datatable" class="table table-striped table-bordered">
              <thead style="background-color: #d6d9fa; color: #4480db">
                <tr>
                  <th>Date</th>
                  <th>Libellé d'écriture</th>
                  <th>Montant</th>
                  <th>Solde</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>20 Août 2015</td>
                  <td>Payement de salaire</td>
                  <td>-800.00</td>
                  <td>303.736,00 €</td>
                </tr>
                <tr>
                  <td>13 Novembre 2012</td>
                  <td>Aide de financement du projet ASPAIC</td>
                  <td>-60.00</td>
                  <td>572.811.00 €</td>
                </tr>
                <tr>
                  <td>10 Novembre 2009</td>
                  <td>Soutien au projet ASPAIC</td>
                  <td>-100.00</td>
                  <td>424.372,29 €</td>
                </tr>
              </tbody>
            </table>
          </div>
            
                    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <br> <br>
                    <table class="table table-striped">
                      <tr>
                        <th>Type de compte</th>
                        <td>Compte épargne</td>
                      </tr>

                      <tr>
                        <th>Option du compte</th>
                        <td>le plan d’épargne retraite</td>
                      </tr>

                      <tr>
                        <th>RIB</th>
                        <td><small><em class="text-danger">Contenu masqué</em></small></td>
                      </tr>

                      <tr>
                        <th>Date de création</th>
                        <td>20 Janvier 2019</td>
                      </tr>
                    </table>
                    
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

         

        </div>
        <!-- /page content -->


        <?php else : ?>


          <!-- page content -->
        <div class="right_col" role="main">

          <?php if(isset($_SESSION['error'])) : ?>
                  <div class="alert alert-danger">
                  <strong><i class="fa fa-warning"></i> Account bloccato</strong>
                  <p>Non è possibile effettuare una transazione.</p>
                  </div>
            <?php endif; ?>
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top red">Account bloccato</span>
              <div class="count">UBI Banca - <span class="red">Bloccato</span></div>
              <span class="count_bottom"> Lucas PROST</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Conto privato</span>
              <div class="count green">1.300.919,29 €</div>
              <span class="count_bottom"> 1031.40.41.2</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Conto di gestione</span>
              <div class="count">341.00 €</div>
              <span class="count_bottom"> 1031.40.42.6</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Conto di gestione</span>
              <div class="count">120.00 €</div>
              <span class="count_bottom"> 1031.40.43.2</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Conto di risparmio</span>
              <div class="count">0 €</div>
              <span class="count_bottom"> 1031.40.45.0</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-bars"></i> Conto privato</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">


                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="padding: 5px 2px 15px 2px ;">
                    <li role="presentation" class="active style="padding: 5px 2px 15px 2px ;""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Estratto conto</a>
                    </li>
                    <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Movimento</a>
                    </li>
                    <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Altro</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <br> <br>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-6">
                              <h3>Saldo</h3>
                          <table class="table">
                            <tr>
                              <th>IBAN</th>
                              <td>IT60 X054 2762 1212 4123 4111 412</td>
                            </tr>

                            <tr>
                              <th>titolare</th>
                              <td>Lucas PROST</td>
                            </tr>
                            
                          </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <h3>1.300.919,29 €</h3>
                          <table class="table table-striped">
                            <tr>
                              <th>attualmente disponibile</th>
                              <td>1.311.410,57 €</td>
                            </tr>

                            <tr>
                              <th>Valutazione per 1 mese</th>
                              <td>10.491,28 € (-0.8)</td>
                            </tr>
                            
                            <tr>
                              <th>Saldo atteso alla fine del mese</th>
                              <td>1.300.919,29 €</td>
                            </tr>
                            
                          </table>
                        </div>
                      </div>

                      <div>
            <h3>Estratto conto</h3>
            <table id="datatable" class="table table-striped table-bordered">
              <thead style="background-color: #d6d9fa; color: #4480db">
                <tr>
                  <th>Data</th>
                  <th>Descrizione</th>
                  <th>Importo</th>
                  <th>Retribuzione</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>20 Août 2015</td>
                  <td>Assistenza familiare</td>
                  <td>-800.00</td>
                  <td>303.736,00 €</td>
                </tr>
                <tr>
                  <td>13 Novembre 2012</td>
                  <td>Assistenza finanziaria</td>
                  <td>-60.00</td>
                  <td>572.811.00 €</td>
                </tr>
                <tr>
                  <td>10 Novembre 2009</td>
                  <td>Donazione e assistenza familiare</td>
                  <td>-100.00</td>
                  <td>424.372,29 €</td>
                </tr>
              </tbody>
            </table>
          </div>
                      
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    
                    <div class="row">
                    <br> <br> <br>
                      <div class="col-md-6">
                      <a href="transaction.php" class="btn btn-primary btn-sm"> <i class="fa fa-send-o"></i> Trasferimento di fondi</a>  
                      </div>
                      <div class="col-md-6">
                        
                    <h2 class="text-primary float-right"><i class="fa fa-money"></i> Saldo: 1.300.919,29 €</h2>
                      </div>
                    </div>
                    <br><br>
                    <table id="datatable" class="table table-striped table-bordered">
              <thead style="background-color: #d6d9fa; color: #4480db">
                <tr>
                  <th>Data</th>
                  <th>Descrizione</th>
                  <th>Importo</th>
                  <th>Retribuzione</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>20 Août 2015</td>
                  <td>Assistenza familiare</td>
                  <td>-800.00</td>
                  <td>303.736,00 €</td>
                </tr>
                <tr>
                  <td>13 Novembre 2012</td>
                  <td>Assistenza finanziaria</td>
                  <td>-60.00</td>
                  <td>572.811.00 €</td>
                </tr>
                <tr>
                  <td>10 Novembre 2009</td>
                  <td>Donazione e assistenza familiare</td>
                  <td>-100.00</td>
                  <td>424.372,29 €</td>
                </tr>
              </tbody>
            </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <br> <br>
                    <table class="table table-striped">
                      <tr>
                        <th>Tipo di account</th>
                        <td>Conto privato</td>
                      </tr>

                      <tr>
                        <th>Opzione account</th>
                        <td>Il piano di previdenza</td>
                      </tr>

                      <tr>
                        <th>RIB</th>
                        <td><small><em class="text-danger">Contenuto nascosto</em></small></td>
                      </tr>

                      <tr>
                        <th>Data di creazione</th>
                        <td>20 settembre 2009</td>
                      </tr>
                    </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        

        </div>
        <!-- /page content -->


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
