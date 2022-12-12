
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
          <h3 class="title-form">Novo Inventário</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">


                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Tipo de Imóvel</span>
                      <select class="form-select" id="localCinema">
                      <option selected>moradia</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Tipologia do Imóvel</span>
                      <select class="form-select" id="localCinema">
                      <option selected>T0</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-8">
                      <label for="emailCinema" class="form-label">Morada</label>
                      <input type="text" class="form-control" id="emailCinema">
                    </div>

                    <div class="col-4">
                      <label for="emailCinema" class="form-label">Código Postal</label>
                      <input type="text" class="form-control" id="emailCinema">
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Distrito</span>
                      <select class="form-select" id="localCinema">
                      <option selected>Sem localidades registadas</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Concelho</span>
                      <select class="form-select" id="localCinema">
                      <option selected>Sem localidades registadas</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Freguesia</span>
                      <select class="form-select" id="localCinema">
                      <option selected>Sem localidades registadas</option>
                      </select>
                      </div>
                    </div>

                    
                    <div class="col-3">
                    <label for="emailCinema" class="form-label">Área Útil</label>
                      <div class="input-group">
                      
                       <input type="text" class="form-control" id="emailCinema">
                       <span class="input-group-text fw-bold" id="basic-addon1">&#13217</span>
                      </div>
                    </div>

                    <div class="col-3">
                    <label for="emailCinema" class="form-label">Área Bruta</label>
                      <div class="input-group">
                      
                       <input type="text" class="form-control" id="emailCinema">
                       <span class="input-group-text fw-bold" id="basic-addon1">&#13217</span>
                      </div>
                    </div>

                    <div class="col-3">
                      <label for="emailCinema" class="form-label">Nº WC's</label>
                      <input type="text" class="form-control" id="emailCinema">
                    </div>

                    <div class="col-3">
                      <label for="emailCinema" class="form-label">Ano Construção</label>
                      <input type="text" class="form-control" id="emailCinema">
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Certificado Energético</span>
                      <select class="form-select" id="localCinema">
                      <option selected>A+</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Condição</span>
                      <select class="form-select" id="localCinema">
                      <option selected>Novo</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">Tipo de Negócio</span>
                      <select class="form-select" id="localCinema">
                      <option selected>Arrenda</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="telCinema" class="form-label">Observações</label>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoCinema()" type="button">Registar</button>
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
</html>