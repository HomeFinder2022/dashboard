
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <table class="table table-hover table-bordered dataTable mt-3">
              <thead>
                <tr>
                  <th colspan="2" class="sorting"><a href="/landlord/#buildings/?sort=BuildingAddress|"> ID</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingSize|"> Imóvel</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingPropertiesCount|"> Inquilino</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingComments|"> Documento</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingComments|"> Data</a></th>
                  <th class="span1 center" style="width: 50px;">Ações</th>
                </tr>
              </thead>
              <tbody>
                    <tr>
                    <td colspan="8" style="text-align: center;">
                    <div class="noresult">
                      <img src="/img/picto_landlord_search.png" alt="" width="270">
                      <h4>Não há nada aqui...</h4>
                      <p>Nesta página pode consultar os inventários relativos aos seus imóveis.</p>
                    </div>
                    <p><button type="button" onclick="window.location.href='/landlord/#buildings/new';" class="btn btn-success">Novo Inventário</button></p>
                  </td>
                </tr>
                  </tbody>
              <tfoot>
                </tfoot>
            </table>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
</html>
