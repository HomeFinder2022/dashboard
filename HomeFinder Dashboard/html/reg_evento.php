
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
      
            <div class="container-fluid">
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mt-3">
       <div class="container-fluid mt-3">
          <h3 class="title-form">Novo Evento</h3>


          <form class="row g-3">

<div class="col-6">
  <label for="titleEvent" class="form-label">Titulo</label>
  <input type="text" class="form-control" id="titleEvent">
</div>

<div class="col-6">
  <label for="descEvent" class="form-label">Descrição</label>
  <input type="text" class="form-control" id="descEvent">
</div>

<div class="col-6">
  <label for="inicioEvent" class="form-label">Data Inicio</label>
  <input type="datetime-local" class="form-control" id="inicioEvent">
</div>

<div class="col-6">
  <label for="fimEvent" class="form-label">Data Fim</label>
  <input class="form-control" type="datetime-local" id="fimEvent">
</div>


<div class="col-12 mt-3">
  <button class="btn btn-primary" onclick="registoEvento()" type="button">Registar Evento</button>
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
  <script src="../js/evento.js"></script>
</html>
