 <!-- page content -->
 <div class="right_col" role="main">

  <?php if(isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
        <strong><i class="fa fa-warning"></i> Conta bloqueada</strong>
        <p>Você não pode fazer uma transação.</p>
        </div>
  <?php endif; ?>
<!-- top tiles -->
<div class="row tile_count">
  <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
    <span class="count_top red">Conta ativa</span>
    <div class="count">HSBC France - <span class="red">Ativo</span></div>
    <span class="count_bottom"> Vancauwenbergs Albert Antoon</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Conta privada</span>
      <div class="count red">1.530.000,29 €</div>
      <span class="count_bottom"> <a href="trans.php?lang=ptg" class="btn btn-success btn-sm"> Transferência de dinheiro</a>  </span>
      
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i>Conta de gestão</span>
    <div class="count">341.00 €</div>
    <span class="count_bottom"> 1031.40.42.6</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Conta de gestão</span>
    <div class="count">120.00 €</div>
    <span class="count_bottom"> 1031.40.43.2</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Conta poupança</span>
    <div class="count">0 €</div>
    <span class="count_bottom"> 1031.40.45.0</span>
  </div>
</div>
<!-- /top tiles -->

<div class="">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Conta privada</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="padding: 5px 2px 15px 2px ;">
          <li role="presentation" class="active style="padding: 5px 2px 15px 2px ;""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Extrato da conta</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Movimentos</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">De outros</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
          <br> <br>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Extrato da conta - Saldo</h3>
                <table class="table">
                  <tr>
                    <th>IBAN</th>
                    <td>IT60 X054 2762 1212 4123 4111 412</td>
                  </tr>

                  <tr>
                    <th>Dono da conta</th>
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
                    <th>Disponível atualmente</th>
                    <td>1.530.000,29 €</td>
                  </tr>

                  <tr>
                    <th>Avaliação por 1 mês</th>
                    <td>10.491,28 € (-0.8)</td>
                  </tr>
                  
                  <tr>
                    <th>Saldo esperado no final do mês</th>
                    <td>1.530.000,29 €</td>
                  </tr>
                  
                </table>
              </div>
            </div>

            <div>
            <h3>Extrato da conta</h3>
            <table id="datatable" class="table table-striped table-bordered">
              <thead style="background-color: #d6d9fa; color: #4480db">
                <tr>
                  <th>Datado</th>
                  <th>Escrevendo legenda</th>
                  <th>Montante</th>
                  <th>Saldo</th>
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
            <a href="trans.php?lang=ptg" class="btn btn-primary btn-sm"> <i class="fa fa-send-o"></i> Transferência de dinheiro</a>  
            </div>
            <div class="col-md-6">
              
          <h2 class="text-primary float-right"><i class="fa fa-money"></i> Saldo: 1.530.000,29 €</h2>
            </div>
          </div>
          <br><br>
          <table id="datatable" class="table table-striped table-bordered">
    <thead style="background-color: #d6d9fa; color: #4480db">
      <tr>
        <th>Datado</th>
        <th>Escrevendo legenda</th>
        <th>Montante</th>
        <th>Saldo</th>
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
              <th>Tipo de conta</th>
              <td>Conta poupança</td>
            </tr>

            <tr>
              <th>Opção de conta</th>
              <td>O plano de poupança para aposentadoria</td>
            </tr>

            <tr>
              <th>Costela</th>
              <td><small><em class="text-danger">Conteúdo oculto</em></small></td>
            </tr>

            <tr>
              <th>Data de criação</th>
              <td>20 de janeiro de 2019</td>
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