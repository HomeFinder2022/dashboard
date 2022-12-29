
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
          <h3 class="title-form">Novo Movimento</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">
                      
                    <div class="col-6">
                      <h5 class="title-form">Receitas</h5>
                      <label for="valorReceita" class="form-label">Insira a quantia</label>
                      <input class="form-control" type="number" id="valorReceita">
                    <!-- </div> -->

                    <!-- <div class="col-6"> -->
                      <button class="btn btn-primary mt-3" onclick="registarReceita()" type="button">Registar Receita</button>
                    </div>

                    
                    <div class="col-6">
                    <h5 class="text-danger">Despesas</h5>
                      <label for="valorDespesa" class="form-label">Insira a quantia</label>
                      <input class="form-control" type="number" id="valorDespesa">
                    <!-- </div> -->

                    <!-- <div class="col-6"> -->
                      <button class="btn btn-danger mt-3" onclick="registarDespesa()" type="button">Registar Despesa</button>
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
  <script src="../js/financas.js"></script>
</html>
