
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            
            <div class="container-fluid mt-3">

            <table id="imoTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 61px;">ID Imóvel
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 80px;">Morada</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 61px;">Distrito</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 122px;">Concelho</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending" style="width: 61px;">Freguesia</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Tipo de Imóvel</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 93px;">Tipologia</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaImoveis">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">ID Imóvel</th>
            <th rowspan="1" colspan="1">Morada</th>
            <th rowspan="1" colspan="1">Distrito</th>
            <th rowspan="1" colspan="1">Concelho</th>
            <th rowspan="1" colspan="1">Freguesia</th>
            <th rowspan="1" colspan="1">Tipo de Imóvel</th>
            <th rowspan="1" colspan="1">Tipologia</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </tfoot>
</table>

          </div>
            </div>
            </div>
            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/imovel.js"></script>
</html>
