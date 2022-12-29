
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="container-fluid mt-3">

             <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/euro.svg"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                           
                          </div>
                          <span class="fw-semibold d-block mb-1">Saldo</span>
                          <div id="saldoUser"></div>
                          
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/money-insert.svg"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Receitas</span>
                          <div id=saldoReceitas></div>
                          
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/money-withdraw.svg"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Despesas</span>
                          <div id="saldoDespesas"></div>
                          
                          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    
                      <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transações</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Último Dia</a>
                          <a class="dropdown-item" href="javascript:void(0);">Último Mês</a>
                          <a class="dropdown-item" href="javascript:void(0);">Último Ano</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0" id="listaTransacoes">

                      </ul>
                    </div>
                  </div>
                </div> 

                <div class="col-md-6 col-lg-6 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Ações</h5>
                      </div>
                        <div class="card-body">




          <table class="calculator" >
            <tr>
              <td colspan="3"> <input class="display-box" type="text" id="result" disabled /> </td>
           
              <!-- clearScreen() function clears all the values -->
              <td> <input type="button" value="C" class="btn btn-success btn-icon rounded-pill" onclick="clearScreen()" id="btn" /> </td>
            </tr>
            <tr>
              <!-- display() function displays the value of clicked button -->
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="1" onclick="display('1')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="2" onclick="display('2')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="3" onclick="display('3')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="/" onclick="display('/')" /> </td>
        </tr>
            <tr>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="4" onclick="display('4')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="5" onclick="display('5')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="6" onclick="display('6')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="-" onclick="display('-')" /> </td>
            </tr>
            <tr>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="7" onclick="display('7')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="8" onclick="display('8')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="9" onclick="display('9')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="+" onclick="display('+')" /> </td>
            </tr>
            <tr>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="." onclick="display('.')" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="0" onclick="display('0')" /> </td>
           
              <!-- calculate() function evaluates the mathematical expression -->
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="=" onclick="calculate()" id="btn" /> </td>
              <td> <input type="button" class="btn btn-success btn-icon rounded-pill" value="*" onclick="display('*')" /> </td>
            </tr>
          </table>


                        
                    </div>
                  </div>
                </div> 

                
                  </div>
                </div>



    </div>
        </div>
            </div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/financas.js"></script>
</html>
