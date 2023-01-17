
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
              <div class="container-fluid mt-3">

            <h4 class="title-form text-center">Pedidos de Reserva Realizados</h4>
            <table id="resTableFeitos" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">Id
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Destinatário</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Data de Entrada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data de Saída</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Número de Pessoas</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 70px;">Estado</th>
        </tr>
    </thead>
    <tbody id="listaResFeitos">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Destinatário</th>
            <th rowspan="1" colspan="1">Data de Entrada</th>
            <th rowspan="1" colspan="1">Data de Saída</th>
            <th rowspan="1" colspan="1">Número de Pessoas</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th rowspan="1" colspan="1">Estado</th>
        </tr>
    </tfoot>
</table>

<hr style = "height: 5px; color: #2FCB6A;">

<h4 class="title-form text-center">Pedidos de Reserva Pendentes</h4>
            <table id="resTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
            <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">Id
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Destinatário</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Data de Entrada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data de Saída</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Número de Pessoas</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 70px;">Ações</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 70px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaRes">
        
    </tbody>
    <tfoot>
        <tr>
        <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Destinatário</th>
            <th rowspan="1" colspan="1">Data de Entrada</th>
            <th rowspan="1" colspan="1">Data de Saída</th>
            <th rowspan="1" colspan="1">Número de Pessoas</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th rowspan="1" colspan="1">Ações</th>
            <th rowspan="1" colspan="1">Ações</th>
        </tr>
    </tfoot>
</table>

<hr style = "height: 5px; color: #2FCB6A;">

<h4 class="title-form text-center">Pedidos de Reserva Agendados</h4>
            <table id="resTableAceites" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
            <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">Id
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Destinatário</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Data de Entrada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data de Saída</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Número de Pessoas</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 70px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaResAceites">
        
    </tbody>
    <tfoot>
        <tr>
        <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Destinatário</th>
            <th rowspan="1" colspan="1">Data de Entrada</th>
            <th rowspan="1" colspan="1">Data de Saída</th>
            <th rowspan="1" colspan="1">Número de Pessoas</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th rowspan="1" colspan="1">Ações</th>
        </tr>
    </tfoot>
</table>



            </div>
            </div>
            </div>
            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/reserva.js"></script>
</html>
