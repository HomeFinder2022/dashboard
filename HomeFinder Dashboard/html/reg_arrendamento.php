
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
      
            <div class="container-fluid">
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mt-3">
        <div
          class="card-header d-flex align-items-center justify-content-between">
          <h3 class="title-form">Novo Arrendamento</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">

                    <div class="col-3">
                      <div class="input-group">
                      <span class="input-group-text">Imóveis</span>
                      <select class="form-select" id="imovelArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="input-group">
                      <span class="input-group-text">Inquilinos</span>
                      <select class="form-select" id="inquiArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="input-group">
                      <span class="input-group-text">Inventários</span>
                      <select class="form-select" id="inventArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-2">
                      <div class="input-group">
                      <span class="input-group-text">Estado</span>
                      <select class="form-select" id="estadoArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-3">
                      <div class="input-group">
                      <span class="input-group-text">Tipo de Pagamento</span>
                      <select class="form-select" id="tipoPagArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-3">
                      <label for="caucaoArr" class="form-label">Caução
                      </label>
                      <input type="number" class="form-control" id="caucaoArr">
                    </div>

                    <div class="col-3">
                      <label for="dataPagamentoArr" class="form-label">Data Pagamento</label>
                      <input type="date" class="form-control" id="dataPagamentoArr">
                    </div>

                  <!-- FALTA DOCUMENTOS - CONTRATOS -->

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoArr()" type="button">Registar Arrendamento</button>
                    </div>
                  </form>

        </div>
      </div>
    </div>
  </div>
</div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/arrendamento.js"></script>
</html>