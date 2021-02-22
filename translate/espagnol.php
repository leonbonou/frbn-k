 <!-- page content -->
 <div class="right_col" role="main">

<?php if(isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
        <strong><i class="fa fa-warning"></i> Cuenta bloqueada</strong>
        <p>No puedes realizar una transacción.</p>
        </div>
  <?php endif; ?>
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
    <span class="count_top red">Cuenta activa</span>
    <div class="count">HSBC France - <span class="red">Activo</span></div>
    <span class="count_bottom"> Vancauwenbergs Albert Antoon</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i>Cuenta privada</span>
    <div class="count red">1.530.000,29 €</div>
    <span class="count_bottom"> <a href="trans.php?lang=esp" class="btn btn-success btn-sm">  Transferencia de fondos</a>  </span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i>Cuenta de gestión</span>
    <div class="count">341.00 €</div>
    <span class="count_bottom"> 1031.40.42.6</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Cuenta de gestión</span>
    <div class="count">120.00 €</div>
    <span class="count_bottom"> 1031.40.43.2</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Cuenta de ahorro</span>
    <div class="count">0 €</div>
    <span class="count_bottom"> 1031.40.45.0</span>
  </div>
</div>
<!-- /top tiles -->

<div class="">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Cuenta privada</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="padding: 5px 2px 15px 2px ;">
          <li role="presentation" class="active style="padding: 5px 2px 15px 2px ;""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Estado de cuenta</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Movimientos</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Otro</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
          <br> <br>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Estado de cuenta - Saldo</h3>
                <table class="table">
                  <tr>
                    <th>IBAN</th>
                    <td>IT60 X054 2762 1212 4123 4111 412</td>
                  </tr>

                  <tr>
                    <th>Titular de la cuenta</th>
                    <td>Vancauwenbergs Albert Anton</td>
                  </tr>
                  
                </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <h3>1.530.000,29 €</h3>
                <table class="table table-striped">
                  <tr>
                    <th>Actualmente disponible</th>
                    <td>1.311.410,57 €</td>
                  </tr>

                  <tr>
                    <th>Evaluación por 1 mes</th>
                    <td>10.491,28 € (-0.8)</td>
                  </tr>
                  
                  <tr>
                    <th>Saldo esperado al final del mes</th>
                    <td>1.530.000,29 €</td>
                  </tr>
                  
                </table>
              </div>
            </div>

            <div>
  <h3>Estado de cuenta</h3>
  <table id="datatable" class="table table-striped table-bordered">
    <thead style="background-color: #d6d9fa; color: #4480db">
      <tr>
        <th>Con fecha de</th>
        <th>Título de escritura</th>
        <th>Cantidad</th>
        <th>Equilibrar</th>
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
            <a href="trans.php?lang=esp" class="btn btn-primary btn-sm"> <i class="fa fa-send-o"></i> Transferencia de fondos</a>  
            </div>
            <div class="col-md-6">
              
          <h2 class="text-primary float-right"><i class="fa fa-money"></i> Saldo: 1.530.000,29 €</h2>
            </div>
          </div>
          <br><br>
          <table id="datatable" class="table table-striped table-bordered">
    <thead style="background-color: #d6d9fa; color: #4480db">
      <tr>
        <th>Con fecha de</th>
        <th>Título de escritura</th>
        <th>Cantidad</th>
        <th>Equilibrar</th>
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
              <th>Tipo de cuenta</th>
              <td>Cuenta de ahorros</td>
            </tr>

            <tr>
              <th>Opzione account</th>
              <td>El plan de ahorro para la jubilación</td>
            </tr>

            <tr>
              <th>COSTILLA</th>
              <td><small><em class="text-danger">Contenido oculto</em></small></td>
            </tr>

            <tr>
              <th>Fecha de creación</th>
              <td>20 de enero de 2019</td>
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