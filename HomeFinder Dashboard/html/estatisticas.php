
<?php require_once 'menu.php'; ?>
<script src="../js/charts.js"></script>

          <!-- Content wrapper -->
          <div class="content-wrapper">
<div class="container-fluid">        
<div class="card mt-3">
            
            <div class="container-fluid mt-3">
    <h3 class="title-form text-center mt-1">Finanças</h3>
          <canvas class="mt-3" id="myChart" ></canvas>
          <!-- <hr style = "height: 5px; color: #2FCB6A;"> -->
          <h3 class="title-form text-center mt-4">Imóveis</h3>
          <canvas class="mt-3" id="myChart2" ></canvas>
          </div>
          </div>
          </div>

          <script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        datasets: [{
            label: 'Saldo ',
            data: [500, 1500, 3500, 2000, 4500, 3500, 4000, 5000, 3500, 4500, 6000, 5500],
            backgroundColor: 'rgba(0, 0, 255, 0.2 )',
            borderColor: 'rgba(0, 0, 255, 1 )',
            borderWidth: 1
        }, {
            label: 'Receitas',
            data: [500, 2000, 3000, 440, 400, 200, 500, 50, 555, 545, 524, 574],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(0, 0, 0, 1)',
            borderWidth: 1
        }, {
            label: 'Despesas',
            data: [0, 500, 3200, 400, 400, 250, 435, 520, 540, 550, 585, 574],
            backgroundColor: 'rgba(220, 20, 60, 0.2)',
            borderColor: 'rgba(220, 20, 60, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});





</script>


<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        datasets: [{
            label: 'Número de inquilinos ',
            data: [4, 5, 5, 7, 7, 8, 8, 9, 9, 10, 10, 10],
            backgroundColor: 'rgba(47, 203, 106, 0.2)',
            borderColor: 'rgba(47, 203, 106, 2)',
            borderWidth: 1
        }, {
            label: 'Número de casas',
            data: [2, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 5],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(0, 0, 0, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});





</script>
   
            <!-- Content -->
            <!-- <table class="table table-hover table-bordered dataTable mt-3">
              <thead>
                <tr>
                  <th colspan="2" class="sorting"><a href="/landlord/#buildings/?sort=BuildingAddress|"> Imóvel</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingSize|"> Inquilino</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingPropertiesCount|"> Renda</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingComments|"> Duração</a></th>
                  <th class="hidden-phone sorting"><a href="/landlord/#buildings/?sort=BuildingComments|"> Estado</a></th>
                  <th class="span1 center" style="width: 50px;">Ações</th>
                </tr>
              </thead>
              <tbody>
                    <tr>
                    <td colspan="8" style="text-align: center;">
                    <div class="noresult">
                      <img src="/img/picto_landlord_search.png" alt="" width="270">
                      <h4>Não há nada aqui...</h4>
                      <p>Nesta página pode consultar as suas reservas.</p>
                    </div>
                    <p><button type="button" onclick="window.location.href='/landlord/#buildings/new';" class="btn btn-success">Nova Reserva</button></p>
                  </td>
                </tr>
                  </tbody>
              <tfoot>
                </tfoot>
            </table> -->

            <!-- / Content -->

            


          
  </body>
  <?php require_once 'footer.php'; ?>

  <script src="../js/estatisticas.js"></script>
</html>
