
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
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Contato</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Morada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Distrito</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaInqui">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Nome</th>
            <th rowspan="1" colspan="1">Email</th>
            <th rowspan="1" colspan="1">Contato</th>
            <th rowspan="1" colspan="1">Morada</th>
            <th rowspan="1" colspan="1">Distrito</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </tfoot>
</table>

          </div>
            </div>
            </div>
<!-- <button onclick="sendEmail()">Enviar Email</button> -->




            <!-- / Content -->
			
          
  </body>
  <?php require_once 'footer.php'; ?>
  <!-- DATATABLES -->

<!-- <link rel="stylesheet" href="../assets/css/datatablesconfig.scss" /> -->
  <script src="../js/inquilino.js"></script>
</html>
