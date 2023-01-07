  // function getStat() {
  //   let dados = new FormData();
  
  //   data.append("op", 1);
  

  //   $.ajax({
  //     url: "../assets/model/modelEstatisticas.php",
  //     method: "POST",
  //     data: dados,
  //     dataType: "html",
  //     cache: false,
  //     contentType: false,
  //     processData: false,
  //   })
  
  //     .done(function (resposta) {
  //       let obj = JSON.parse(resposta);
  //       $("#myChart").html(resposta);
  //   const ctx = document.getElementById('myChart');

  // new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  //     datasets: [{
  //       label: '# of Votes',
  //       data: [12, 19, 3, 5, 2, 3],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });
  
  //     .fail(function (jqXHR, textStatus) {
  //       alert("Request failed: " + textStatus);
  //     });
  // }





  // function getImovel() {
  //   let dados = new FormData();
  
  //   dados.append("op", 3);
  
  //   $.ajax({
  //     url: "../assets/model/modelIntervencao.php",
  //     method: "POST",
  //     data: dados,
  //     dataType: "html",
  //     cache: false,
  //     contentType: false,
  //     processData: false,
  //   })
  
  //     .done(function (resposta) {
  //       $("#imovelInt").html(resposta);
  //       })
  
  //     .fail(function (jqXHR, textStatus) {
  //       alert("Request failed: " + textStatus);
  //     });
  // }

  function sucesso(msg) {
    Swal.fire({
      position: "center",
      icon: "success",
      title: msg,
      showConfirmButton: false,
      timer: 2000,
    });
  }

  // $(function () {

  //   $.ajax({
  //     url: '../js/data.php',
  //     dataType: 'json',
  //     success: function(data) {
  //         var ctx = document.getElementById('myChart').getContext('2d');
  //         var chart = new Chart(ctx, {
  //             type: 'line',
  //             data: data,
  //             options: {
  //                 // Customize chart options here
  //             }
  //         });
  //     }
  // });
  // });