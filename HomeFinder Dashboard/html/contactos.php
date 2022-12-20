
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-fluid">
            <div class="card mt-3">
            
           
                    <div class="row row gy-3 g-4 mb-5" id="listaContatos">

                  </div>

                  </div>
            </div>

<!-- MODAL -->
<div class="modal fade" id="infoContato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-center" id="exampleModalLabel">Informação do Contato
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    <form class="row g-3">
       
             
                    <div class="col-6">
                      <label for="nomeContato1" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nomeContato1">
                    </div>

                    <div class="col-6">
                      <label for="numContato1" class="form-label">Contato</label>
                      <input type="number" class="form-control" id="numContato1">
                    </div>

                    <div class="col-12">
                      <label for="emailContato1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="emailContato1">
                    </div>

                    <div class="col-12">
                      <label for="fotoContato1" class="form-label">Fotografia</label>
                      <input class="form-control" type="file" id="fotoContato1">
                    </div>

                
     </form>

    <div class="modal-footer mt-4">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      <button type="button" class="btn btn-success" id="btnContato">Guardar</button>
    </div>
    
  </div>
</div>
</div>
</div>

                    

  

  </body>
  <?php require_once 'footer.php'; ?>
  <script src="../js/contatos.js"></script>
</html>
