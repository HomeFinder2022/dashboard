
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            <table class="table table-hover table-bordered dataTable mt-3">
              <thead>
                <tr>
                  <th>ID Imóvel</th>
                  <th class="hidden-phone sorting">Morada</th>
                  <th class="hidden-phone sorting">Distrito</th>
                  <th class="hidden-phone sorting">Concelho</th>
                  <th class="hidden-phone sorting">Freguesia</th>
                  <th class="hidden-phone sorting">Tipo de Imóvel</th>
                  <th class="hidden-phone sorting">Tipologia</th>
                  <th class="span1 center" style="width: 50px;">Ações</th>
                </tr>
              </thead>
              <tbody id="listaImoveis">
                   
                  </tbody>
            </table>
            </div>
            </div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/imovel.js"></script>
</html>
