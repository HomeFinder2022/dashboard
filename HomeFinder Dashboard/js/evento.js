 function registoEvento() {
    let titleEvent = $("#titleEvent").val();
    let descEvent = $("#descEvent").val();
    let inicioEvent = $("#inicioEvent").val();
    let fimEvent = $('#fimEvent').val();

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("titleEvent", titleEvent);
    dados.append("descEvent", descEvent);
    dados.append("inicioEvent", inicioEvent);
    dados.append("fimEvent", fimEvent);

    $.ajax({
      url: "../assets/model/modelEventos.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        sucesso(resposta);
      })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }


  function sucesso(msg) {
    Swal.fire({
      position: "center",
      icon: "success",
      title: msg,
      showConfirmButton: false,
      timer: 2000,
    });
  }