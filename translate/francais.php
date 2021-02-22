<!-- page content -->
<div class="right_col" role="main">

    <?php if(isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
        <strong><i class="fa fa-warning"></i> Blocked account</strong>
        <p>You cannot make a transaction.</p>
        </div>
    <?php endif; ?>
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
            <span class="count_top green">Active account</span>
            <div class="count">HSBC France - <span class="green">Active</span></div>
            <span class="count_bottom"> Vancauwenbergs Albert Antoon</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Private account</span>
            <div class="count red">1.530.000,29 €</div>
            <span class="count_bottom"> <a href="trans.php?lang=fr" class="btn btn-success btn-sm">  Transfer of funds</a>  </span>
            
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Management account</span>
            <div class="count">341.00 €</div>
            <span class="count_bottom">1031.40.42.6</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Management account</span>
            <div class="count">120.00 €</div>
            <span class="count_bottom"> 1031.40.43.2</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Savings account</span>
            <div class="count">0 €</div>
            <span class="count_bottom"> 1031.40.45.0</span>
        </div>
    </div>
    <!-- /top tiles -->



<div class="">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Private account </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="padding: 5px 2px 15px 2px ;">
          <li role="presentation" class="active" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" title="Relevé de compte" aria-expanded="true">Statement</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" title="Mouvements futurs" aria-expanded="false">Movements</a>
          </li>
          <li role="presentation" class="" style="padding: 5px 2px 15px 2px ;"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" title="Autres informations" aria-expanded="false">Other</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          
          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
          <br> <br>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6">
                    <h3>Account statement - Balance</h3>
                <table class="table">
                  <tr>
                    <th>WERE GOING</th>
                    <td>IT60 X054 2762 1212 4123 4111 412</td>
                  </tr>

                  <tr>
                    <th>Holder</th>
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
                    <th>Currently available</th>
                    <td>1.530.000,29 €</td>
                  </tr>

                  <tr>
                    <th>Evaluation for 1 month</th>
                    <td>10.491,28 € (-0.8)</td>
                  </tr>
                  
                  <tr>
                    <th>Expected balance at the end of the month</th>
                    <td>1.530.000,29 €</td>
                  </tr>
                  
                </table>
              </div>
            </div>

            <div>
  <h3>Account statement</h3>
  <table id="datatable" class="table table-striped table-bordered">
    <thead style="background-color: #d6d9fa; color: #4480db">
      <tr>
        <th>Date</th>
        <th>Writing caption</th>
        <th>Amount</th>
        <th>Balance</th>
      </tr>
    </thead>


    <tbody>
      <tr>
        <td>August 20, 2015</td>
        <td>Salary payment</td>
        <td>-800.00</td>
        <td>303.736,00 €</td>
      </tr>
      <tr>
        <td>November 13, 2012</td>
        <td>Funding assistance for the ASPAIC project</td>
        <td>-60.00</td>
        <td>572.811.00 €</td>
      </tr>
      <tr>
        <td>November 10, 2009</td>
        <td>Support for the ASPAIC project</td>
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
    <a href="trans.php?lang=fr" class="btn btn-primary btn-sm"> <i class="fa fa-send-o"></i> Transfer of funds</a>  
    </div>
    <div class="col-md-6">
      
  <h2 class="text-primary float-right"><i class="fa fa-money"></i> Solde: 1.530.000,29 €</h2>
    </div>
  </div>
  <br><br>
  <div>
  <h3>Account statement</h3>
  <table id="datatable" class="table table-striped table-bordered">
    <thead style="background-color: #d6d9fa; color: #4480db">
    <tr>
        <th>Date</th>
        <th>Writing caption</th>
        <th>Amount</th>
        <th>Balance</th>
      </tr>
    </thead>


    <tbody>
      <tr>
        <td>August 20, 2015</td>
        <td>Salary payment</td>
        <td>-800.00</td>
        <td>303.736,00 €</td>
      </tr>
      <tr>
        <td>November 13, 2012</td>
        <td>Funding assistance for the ASPAIC project</td>
        <td>-60.00</td>
        <td>572.811.00 €</td>
      </tr>
      <tr>
        <td>November 10, 2009</td>
        <td>Support for the ASPAIC project</td>
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
              <th>Type of account</th>
              <td>Savings account</td>
            </tr>

            <tr>
              <th>Account option</th>
              <td>the retirement savings plan</td>
            </tr>

            <tr>
              <th>RIB</th>
              <td><small><em class="text-danger">Hidden content</em></small></td>
            </tr>

            <tr>
              <th>Creation date</th>
              <td>January 20, 2019</td>
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