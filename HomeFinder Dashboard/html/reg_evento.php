
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


        <form class="row g-3" action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label class="form-label">Titulo</label>
                                    <input class="form-control" type="text" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="form-label" for="description">Descrição</label>
                                    <textarea class="form-control" rows="3" name="description" id="description" required></textarea>
                                </div>
                                <div class="col-6">
                                <div class="form-group mb-2">
                                    <label class="form-label" for="start_datetime">Data Inicio</label>
                                    <input class="form-control" type="datetime-local" name="start_datetime" id="start_datetime" required>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="form-group mb-2">
                                    <label class="form-label" for="end_datetime" class="control-label">Data Fim</label>
                                    <input class="form-control" type="datetime-local" name="end_datetime" id="end_datetime" required>
                                </div>
                                </div>
                            </form>
        
                            <div class="col-md-6 mt-3">
                            <button class="btn btn-primary" type="submit" form="schedule-form"><i class="fa fa-save"></i>Registar evento</button>
                           
                            </div>
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
