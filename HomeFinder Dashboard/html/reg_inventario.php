
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
                    
                    <div class="col-12">
                    <p>Para registar um novo inventário é necessário fazer download do nosso modelo para preenchimento e de seguida fazer upload para a plataforma. <a class="mb-3" href='../assets/img/docs/InventarioHomeFinder.xlsx' download>Faça aqui o download do seu ficheiro </a></p>
                    </div>

                    <hr>
                    <div class="col-6">
                    <label for="imovelArr1" class="form-label">Escolha o imóvel</label>
                      <div class="input-group">
                      
                      <select class="form-select" id="imovelArr1">
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <label for="docInvent" class="form-label">Carregue aqui o seu inventário</label>
                      <input class="form-control" type="file" id="docInvent" multiple="multiple">
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoInventario()" type="button">Registar Inventário</button>
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

  <script src="../js/arrendamento.js"></script>
  <!-- É NECESSÁRIO PELO SELECT DOS IMÓVEIS^^ -->
</html>
