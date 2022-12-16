
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
          <h3 class="title-form">Novo Documento</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">
                    
                    <!-- <div class="col-12">
                    <p>Para registar um novo inventário é necessário fazer download do nosso modelo para preenchimento e de seguida fazer upload para a plataforma. <a class="mb-3" href='../assets/img/docs/InventarioHomeFinder.xlsx' download>Faça aqui o download do seu ficheiro </a></p>
                    </div> -->

                    <div class="col-6">
                      <label for="refDoc" class="form-label">Referência do Documento</label>
                      <input type="text" class="form-control" id="refDoc">
                    </div>

                    <div class="col-6">
                    <label for="tipoDoc" class="form-label">Tipo de Documento</label>
                      <div class="input-group">

                      <select class="form-select" id="tipoDoc">
                      </select>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="docInvent" class="form-label">Carregue aqui o seu documento</label>
                      <input class="form-control" type="file" id="userDoc">
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoDocumento()" type="button">Guardar Documento</button>
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
  <script src="../js/inventario.js"></script>
</html>
