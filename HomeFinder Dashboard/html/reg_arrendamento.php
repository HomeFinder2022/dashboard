
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
<P>NOTA: para associar um documento ou o inventário do imóvel é necessário inserir nas suas áreas respectivamente antes do registo do arrendamento.<br><a class="mb-3" href='reg_doc.php'> Carregue aqui o seu contrato </a>ou<a class="mb-3" href='reg_inventario.php'> carregue aqui o seu inventário.</a></P>
                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Imóveis</span>
                      <select class="form-select" id="imovelArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Inquilinos</span>
                      <select class="form-select" id="inquiArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Inventários</span>
                      <select class="form-select" id="inventArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text">Documentos</span>
                      <select class="form-select" id="docArr">
                      </select>
                      </div>
                    </div>
<!-- 
                    <div class="col-3">
                      <div class="input-group">
                      <span class="input-group-text">Estado</span>
                      <select class="form-select" id="estadoArr">
                      </select>
                      </div>
                    </div> -->

                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text">Tipo de Pagamento</span>
                      <select class="form-select" id="tipoPagArr">
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <label for="caucaoArr" class="form-label">Caução
                      </label>
                      <input type="number" class="form-control" id="caucaoArr">
                    </div>

                    <div class="col-6">
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
