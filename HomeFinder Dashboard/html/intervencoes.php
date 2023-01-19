
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
              <div class="container-fluid mt-3">

              <h4 class="title-form text-center">Pedidos de Intervenção Realizados</h4>
            <table id="intTableFeitos" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
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
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Hora</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 70px;">Estado</th>
        </tr>
    </thead>
    <tbody id="listaIntsFeitos">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Destinatário</th>
            <th rowspan="1" colspan="1">Hora</th>
            <th rowspan="1" colspan="1">Data</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th rowspan="1" colspan="1">Estado</th>
        </tr>
    </tfoot>
</table>

<hr style = "height: 5px; color: #2FCB6A;">

<h4 class="title-form text-center">Pedidos de Intervenção Pendentes</h4>
            <table id="intTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">Id
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Remetente</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaInts">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Remetente</th>
            <th rowspan="1" colspan="1">Data</th>
            <th rowspan="1" colspan="1">Observações</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </tfoot>
</table>

<hr style = "height: 5px; color: #2FCB6A;">


<h4 class="text-center title-form">Pedidos de Intervenção Agendados</h4>
            <table id="intTableAceites" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
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
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Hora</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Data</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Observações</th>

        </tr>
    </thead>
    <tbody id="listaIntsAceites">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Id</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Destinatário</th>
            <th rowspan="1" colspan="1">Hora</th>
            <th rowspan="1" colspan="1">Data</th>
            <th rowspan="1" colspan="1">Observações</th>
        </tr>
    </tfoot>
</table>

          </div>
            </div>
            </div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/intervencao.js"></script>
</html>
