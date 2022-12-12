function registoInqui() {
    let nomeInqui = $("#nomeInqui").val();
    let emailInqui = $("#emailInqui").val();
    let moradaInqui = $("#moradaInqui").val();
    let telInqui = $("#telInqui").val();
    let listaDistritos1 = $("#listaDistritos1").val();
    let listaConcelhos1 = $("#listaConcelhos1").val();
    let listaFreguesias1 = $("#listaFreguesias1").val();
    let obsInqui = $("#obsInqui").val();
    


    let dados = new FormData();
    dados.append("op", 1);
    dados.append("nomeInqui", nomeInqui);
    dados.append("emailInqui", emailInqui);
    dados.append("moradaInqui", moradaInqui);
    dados.append("telInqui", telInqui);
    dados.append("listaDistritos1", listaDistritos1);
    dados.append("listaConcelhos1", listaConcelhos1);
    dados.append("listaFreguesias1", listaFreguesias1);
    dados.append("obsInqui", obsInqui);
   

    $.ajax({
      url: "../assets/model/modelInqui.php",
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


  function sendEmail() {
    let emailInqui = "paulopedras93@gmail.com";
    let nomeInqui = "PAULO PEDRAS"; 

    let dados = new FormData();
    dados.append("op", 2);
    dados.append("nomeInqui", nomeInqui);
    dados.append("emailInqui", emailInqui);
    

    $.ajax({
      url: "../assets/model/modelInqui.php",
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

  function tabInqui(){

    let dados = new FormData();

    dados.append("op", 3);

    $.ajax({
        url: "../assets/model/modelInqui.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      $('#listaInqui').html(resposta);

    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
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

  $(function () {
    tabInqui();
  });
