
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            
            <div class="container-fluid mt-3">

            <table id="arrendTable" class="dataTable display cell-border compact" style="width: 100%;" aria-describedby="example_info">
    <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Office: activate to sort column ascending" style="width: 40px;">Imóvel</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Age: activate to sort column ascending" style="width: 80px;">Inquilino</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Caução</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Renda</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Tipo de Pagamento</th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                aria-label="Salary: activate to sort column ascending" style="width: 80px;">Data de Pagamento</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
                <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </thead>
    <tbody id="listaArrendamentos">
        
    </tbody>
    <tfoot>
        <tr>
            <th rowspan="1" colspan="1">Imóvel</th>
            <th rowspan="1" colspan="1">Inquilino</th>
            <th rowspan="1" colspan="1">Caução</th>
            <th rowspan="1" colspan="1">Renda</th>
            <th rowspan="1" colspan="1">Tipo de Pagamento</th>
            <th rowspan="1" colspan="1">Data de Pagamento</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
            <th class="span1 center" style="width: 50px;">Ações</th>
        </tr>
    </tfoot>
</table>



<!-- MODAL -->
<div class="modal fade" id="infoArr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center title-form" id="exampleModalLabel">Confirmação de pagamento
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    
        <form class="row g-3">

                      <div class="col-6">
                      <label for="moradaArrEdit" class="form-label">Imóvel</label>
                      <input disabled type="text" class="form-control" id="moradaArrEdit">
                    </div>

                    <div class="col-6">
                      <label for="inquiArrEdit" class="form-label">Inquilino</label>
                      <input disabled type="text" class="form-control" id="inquiArrEdit">
                    </div>


                    <div class="col-6">
                      <label for="dataPagamentoArrEdit" class="form-label">Data Pagamento</label>
                      <input disabled type="date" class="form-control" id="dataPagamentoArrEdit">
                    </div>


                    <div class="col-6">
                      <label for="precoRendaEdit" class="form-label">Preço Renda</label>
                      <div class="input-group">
                      <input disabled type="number" class="form-control" id="precoRendaEdit">
                      <span class="input-group-text">&euro;</span>
                      </div>
                    </div>

                  </form>
    
        <div class="modal-footer mt-4">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-success" id="btnRenda">Confirmar Pagamento</button>
        </div>
        
      </div>
    </div>
    </div>
    </div>





          </div>
            </div>
            </div>
            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/arrendamento.js"></script>
</html>
