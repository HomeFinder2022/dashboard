
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
          <h3 class="title-form">Novo Contacto</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">

                    <div class="col-6">
                      <label for="nomeContato" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nomeContato">
                    </div>

                    <div class="col-6">
                      <label for="numContato" class="form-label">Contacto</label>
                      <input type="number" class="form-control" id="numContato">
                    </div>

                    <div class="col-8">
                      <label for="emailContato" class="form-label">Email</label>
                      <input type="email" class="form-control" id="emailContato">
                    </div>

                    <div class="col-12">
                      <label for="fotoContato" class="form-label">Fotografia</label>
                      <input class="form-control" type="file" id="fotoContato">
                    </div>


                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoContato()" type="button">Registar Contato</button>
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
  <script src="../js/contatos.js"></script>
</html>
