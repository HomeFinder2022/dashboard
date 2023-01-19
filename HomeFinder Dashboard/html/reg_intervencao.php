
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
          <h3 class="title-form">Nova Intervenção</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">
                    
                   
                    
                    <!-- <div class="col-6">
                    <label for="imovelInqui" class="form-label">Escolha o imóvel</label>
                      <div class="input-group">
                      <select class="form-select" id="imovelInqui">
                      </select>
                      </div>
                    </div> -->

                    <div class="col-6">
                    <label for="tipoInt" class="form-label">Tipo de Intervenção</label>
                      <div class="input-group">
                      <select class="form-select" id="tipoInt">
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                    <label for="imovelInt" class="form-label">Imovel</label>
                      <div class="input-group">
                      <select class="form-select" id="imovelInt">
                      </select>
                      </div>
                    </div>

                    <!-- <div class="col-4">
                      <label for="descInt" class="form-label">Email</label>
                      <input type="text" class="form-control" id="descInt">
                    </div> -->

                    <div class="col-3">
                      <label for="dataInt" class="form-label">Data</label>
                      <input type="datetime-local" class="form-control" id="dataInt">
                    </div>
<!-- 
                    <div class="col-3">
                      <label for="horaInt" class="form-label">Hora</label>
                      <input type="time" class="form-control" id="horaInt">
                    </div> -->

                    <div class="col-6">
                      <label for="descInt" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="descInt">
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoIntervencao()" type="button">Registar Intervenção</button>
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
  <script src="../js/intervencao.js"></script>
<!-- 
  <script src="../js/arrendamento.js"></script> -->
  <!-- É NECESSÁRIO PELO SELECT DOS IMÓVEIS^^ -->
</html>
