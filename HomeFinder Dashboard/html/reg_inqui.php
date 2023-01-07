
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
          <h3 class="title-form">Novo Inquilino</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">

                    <div class="col-4">
                      <label for="nomeInqui" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nomeInqui">
                    </div>

                    <div class="col-4">
                      <label for="emailInqui" class="form-label">Email</label>
                      <input type="email" class="form-control" id="emailInqui">
                    </div>

                    <div class="col-4">
                      <label for="nifInqui" class="form-label">NIF</label>
                      <input type="number" class="form-control" id="nifInqui">
                    </div>

                    <div class="col-8">
                      <label for="moradaInqui" class="form-label">Morada</label>
                      <input type="text" class="form-control" id="moradaInqui">
                    </div>

                    <div class="col-4">
                      <label for="telInqui" class="form-label">Contacto</label>
                      <input type="number" class="form-control" id="telInqui">
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Distrito</span>
                      <select class="form-select" onchange ="filtroDistrito(this.value)" id="listaDistritos1">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Concelho</span>
                      <select class="form-select" onchange="filtroConcelho(this.value)" id="listaConcelhos1">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Freguesia</span>
                      <select class="form-select" id="listaFreguesias1">
                      </select>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="obsInqui" class="form-label">Observações</label>
                      <textarea class="form-control" id="obsInqui" aria-label="With textarea"></textarea>
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoInqui()" type="button">Registar Inquilino</button>
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
  <script src="../js/localidades.js"></script>
  <script src="../js/inquilino.js"></script>
</html>
