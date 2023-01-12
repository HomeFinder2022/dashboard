
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
          <h3 class="title-form">Nova Reserva</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">

        <div class="col-6">
                    <label for="imovelRes" class="form-label">Imovel</label>
                      <div class="input-group">
                      <select class="form-select" id="imovelRes">
                      </select>
                      </div>
                    </div>

                    <div class="col-3">
                      <label for="dataEntRes" class="form-label">Data Entrada</label>
                      <input type="date" class="form-control" id="dataEntRes">
                    </div>

                    <div class="col-3">
                      <label for="dataSaiRes" class="form-label">Data Saída</label>
                      <input type="date" class="form-control" id="dataSaiRes">
                    </div>

                    <div class="col-4">
                      <label for="numPessoas" class="form-label">Nº de Pessoas</label>
                      <input type="number" class="form-control" id="numPessoas">
                    </div>

                    <div class="col-8">
                      <label for="descRes" class="form-label">Observações</label>
                      <input type="text" class="form-control" id="descRes">
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoReserva()" type="button">Registar</button>
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
  <script src="../js/reserva.js"></script>
</html>
