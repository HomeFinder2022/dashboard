    <?php require_once 'menu.php'; ?>
    <?php require_once 'db-connect.php'; ?>
    <script src="../js/fullcalendar/lib/main.min.js"></script>
    <script src="../js/fullcalendar/lib/locales/pt.js"></script>
    <link rel="stylesheet" href="../js/fullcalendar/lib/main.css">
    <!-- <script src="../js/pt.js"></script> -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            <div class="container-fluid mt-3">
              <div class="mt-4" id='calendar'></div>
            </div>
            </div>
            </div>

       <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title title-form fs-3">Detalhes do Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt style="color: black !important;">Titulo</dt>
                            <dd id="title" class="fw-bold"></dd>
                            <dt style="color: black !important;">Descrição</dt>
                            <dd id="description"  class="fw-bold"></dd>
                            <dt style="color: black !important;">Data Inicio</dt>
                            <dd id="start"  class="fw-bold"></dd>
                            <dt style="color: black !important;">Data Fim</dt>
                            <dd id="end" class="fw-bold"></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Apagar</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    
            <!-- / Content -->
            <?php 
           
            
$schedules = $conn->query("SELECT * FROM eventos");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
  // setlocale(LC_TIME, 'pt_PT');
     $row['sdate'] = date("d F Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("d F Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?> 
  </body>
  <?php require_once 'footer.php'; ?>
  <script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
  <script src="../js/script.js"></script>
</html>
