
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
			<div class="container-fluid">
            <div class="card mt-3">
              <div class="container-fluid mt-3">

            <table id="inquiTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">Nome</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Email</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 41px;">Contacto</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Morada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="span1 center" style="width: 10px;">Ações</th>
                <th class="span1 center" style="width: 10px;">Ações</th>
                <th class="span1 center" style="width: 30px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaInqui">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Nome</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Contacto</th>
            <th rowspan="1" colspan="1">Morada</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th class="span1 center" style="width: 10px;">Ações</th>
            <th class="span1 center" style="width: 10px;">Ações</th>
            <th class="span1 center" style="width: 30px;">Ações</th>
        </tr>
    </tfoot>
</table>

          </div>
            </div>
            </div>
<!-- <button onclick="sendEmail()">Enviar Email</button> -->

<!-- <img src='../assets/img/logo-HomeFinder-mini.png' alt='logo'> -->
<!-- MODAL -->
<div class="modal fade" id="infoInquilino" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center title-form" id="exampleModalLabel">Informação do Inquilino
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    
        <form class="row g-3">

<div class="col-4">
  <label for="nomeInquiEdit" class="form-label">Nome</label>
  <input type="text" class="form-control" id="nomeInquiEdit">
</div>

<div class="col-4">
  <label for="emailInquiEdit" class="form-label">Email</label>
  <input type="email" class="form-control" id="emailInquiEdit">
</div>

<div class="col-4">
  <label for="nifInquiEdit" class="form-label">NIF</label>
  <input type="number" class="form-control" id="nifInquiEdit">
</div>

<div class="col-8">
  <label for="moradaInquiEdit" class="form-label">Morada</label>
  <input type="text" class="form-control" id="moradaInquiEdit">
</div>

<div class="col-4">
  <label for="telInquiEdit" class="form-label">Contacto</label>
  <input type="number" class="form-control" id="telInquiEdit">
</div>



<div class="col-12">
  <label for="obsInquiEdit" class="form-label">Observações</label>
  <textarea class="form-control" id="obsInquiEdit" aria-label="With textarea"></textarea>
</div>

</form>
    
        <div class="modal-footer mt-4">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-success" id="btnInquilino">Guardar</button>
        </div>
        
      </div>
    </div>
    </div>
    </div>


            <!-- / Content -->
			
          
  </body>
  <?php require_once 'footer.php'; ?>
  <!-- DATATABLES -->

<!-- <link rel="stylesheet" href="../assets/css/datatablesconfig.scss" /> -->
    <script src="../js/localidades.js"></script>
    <script src="../js/inquilino.js"></script>
</html>
