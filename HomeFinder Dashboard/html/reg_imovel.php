
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
      
            <div class="container-fluid">
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mt-3">
        <div
          class="card-header d-flex align-items-center justify-content-between">
          <h3 class="title-form">Novo Imóvel</h3>
        </div>
        <div class="card-body">
        <form class="row g-3">

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Tipo de Negócio</span>
                      <select class="form-select" onchange="filtroImovel(this.value)" id="tipoNegocImovel">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Tipo de Imóvel</span>
                      <select class="form-select" onchange="filtroTipologia(this.value)" id="tipoImovel">
                      </select>
                      </div>
                    </div>

                    <div class="col-4" id="tipologiaVenda">
                      <!-- <div class="input-group"> -->
                      <!-- <span class='input-group-text'>Tipologia do Imóvel</span>
                      <select class='form-select' id='tipologiaImovel'></select> -->
                      <!-- </div> -->
                    </div>

                    <div class="col-5" id="precoImovel">
                      <div class="input-group">
                     
                      </div>
                    </div>

          
                    <div class="col-8">
                      <label for="moradaImovel" class="form-label">Morada</label>
                      <input type="text" class="form-control" id="moradaImovel">
                    </div>

                    <div class="col-4">
                      <label for="postalImovel" class="form-label">Código Postal</label>
                      <input type="text" placeholder="0000-000" class="form-control" id="postalImovel">
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Distrito</span>
                      <select class="form-select" onchange ="filtroDistrito(this.value)" id="listaDistritos">
            
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Concelho</span>
                      <select class="form-select" onchange="filtroConcelho(this.value)" id="listaConcelhos">
                      </select>
                      </div>
                    </div>

                    <div class="col-4">
                      <div class="input-group">
                      <span class="input-group-text">Freguesia</span>
                      <select class="form-select" id="listaFreguesias">
                      <option selected>Sem localidades registadas</option>
                      </select>
                      </div>
                    </div>

                    
                    <div class="col-3">
                    <label for="areaUtil" class="form-label">Área Útil</label>
                      <div class="input-group">
                       <input type="number" class="form-control" id="areaUtil">
                       <span class="input-group-text fw-bold">&#13217</span>
                      </div>
                    </div>

                    <div class="col-3">
                    <label for="areaBruta" class="form-label">Área Bruta</label>
                      <div class="input-group">
                       <input type="number" class="form-control" id="areaBruta">
                       <span class="input-group-text fw-bold">&#13217</span>
                      </div>
                    </div>

                    <div class="col-3">
                      <label for="number" class="form-label">Nº WC's</label>
                      <input type="text" class="form-control" id="numWcs">
                    </div>

                    <div class="col-3">
                      <label for="anoImovel" class="form-label">Ano Construção</label>
                      <input type="number" class="form-control" id="anoImovel">
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text">Certificado Energético</span>
                      <select class="form-select" id="certEnerg">
                      </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="input-group">
                      <span class="input-group-text">Estado</span>
                      <select class="form-select" id="estadoImovel">
                      </select>
                      </div>
                    </div>

           

                    <div class="col-12">
                    <label for="obsImovel" class="form-label">Caracteristicas</label>
                      <!-- <div class="input-group"> -->
                      
                      <div class="form-check form-check-inline">

                        <div class="pretty p-icon p-round p-smooth">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Aquecimento Central</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Ar Condicionado</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Acessibilidade a pessoas com mobilidade condicionada</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Arrecadação</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Garagem</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Condominio</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>
                        
                        

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Elevador</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Jardim</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                  

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Lareira</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Sistema de Segurança</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Estacionamento</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Alarme Incêndio</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Churrasqueira</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Piscina</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Suite</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Terraço</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Varanda</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>

                        <div class="pretty p-icon p-round p-smooth mt-3">
                        <input type="checkbox" />
                        <div class="state p-success">
                        <label>Sauna</label>
                        <i class="icon mdi mdi-check"></i>
                        </div>
                        </div>


                      </div>
                    </div>

                    <div class="col-12">
                      <label for="fotosImovel" class="form-label">Fotografias do Imóvel</label>
                      <input class="form-control" type="file" id="fotosImovel" multiple="multiple">
                    </div>

                    <div class="col-12">
                      <label for="obsImovel" class="form-label">Observações</label>
                      <textarea class="form-control" aria-label="With textarea" id="obsImovel"></textarea>
                    </div>

                    <div class="col-12 mt-3">
                      <button class="btn btn-primary" onclick="registoImovel()" type="button">Registar Imóvel</button>
                    </div>
                  </form>
        </div>
      </div>
    </div>
  </div>
</div>

            <!-- / Content -->

          
  </body>
  <?php require_once 'footer.php'; ?>
  <!-- LINKS JS DA PÁGINA -->
  <script src="../js/localidades.js"></script>
  <script src="../js/imovel.js"></script>
</html>
