
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
                    <!-- <tr>
                    <td colspan="14" style="text-align: center;">
                    <div class="noresult">
                      <img src="/img/picto_landlord_search.png" alt="" width="270">
                      <h4>Não há nada aqui...</h4>
                      <p>Nesta página pode gerir os seus imóveis. Adicione as percentagens de cada propriedade para distribuir as despesas comuns.</p>
                    </div>
                    <p><button type="button" onclick="window.location.href='reg_imovel.php';" class="btn btn-success">Imóvel novo</button></p>
                  </td>
                </tr> -->
                  </tbody>
            </table>
            </div>
            </div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/imovel.js"></script>
</html>
