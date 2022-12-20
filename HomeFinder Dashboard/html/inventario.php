
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            
            <div class="container-fluid mt-3">
            <div class="col-12">
                        <p>Para registar um novo inventário é necessário fazer download do nosso modelo para preenchimento e de seguida fazer upload para a plataforma. <a class="mb-3" href='../assets/img/docs/InventarioHomeFinder.xlsx' download>Faça aqui o download do seu ficheiro </a></p>
                      
                    </div>
            <table id="inventTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead style="color: #2FCB6A">
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 40px;">ID Inventário</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 80px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Ficheiro</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaInventario">
        
    </tbody>
    <tfoot style="color: #2FCB6A">
        <tr>
            <th rowspan="1" colspan="1">ID Inventário</th>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Ficheiro</th>
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
  <script src="../js/inventario.js"></script>
</html>
