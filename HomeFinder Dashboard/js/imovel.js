function registoImovel() {
    let tipoImovel = $("#tipoImovel").val();
    let tipologiaImovel = $("#tipologiaImovel").val();
    let moradaImovel = $("#moradaImovel").val();
    let postalImovel = $("#postalImovel").val();
    let listaDistritos = $("#listaDistritos").val();
    let listaConcelhos = $("#listaConcelhos").val();
    let listaFreguesias = $("#listaFreguesias").val();
    let areaUtil = $("#areaUtil").val();
    let areaBruta = $("#areaBruta").val();
    let numWcs = $("#numWcs").val();
    let anoImovel = $("#anoImovel").val();
    let certEnerg = $("#certEnerg").val();
    let estadoImovel = $("#estadoImovel").val();
    let tipoNegocImovel = $("#tipoNegocImovel").val();
    let obsImovel = $("#obsImovel").val();
    let pImovel = $("#pImovel").val();
    let rendaImovel = $("#rendaImovel").val();
    let preçoNoite = $("#preçoNoite").val();
    
    // faltam as checkboxes
    

    let fotosImovel = $('#fotosImovel').prop('files')[0];

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("tipoImovel", tipoImovel);
    dados.append("tipologiaImovel", tipologiaImovel);
    dados.append("moradaImovel", moradaImovel);
    dados.append("postalImovel", postalImovel);
    dados.append("listaDistritos", listaDistritos);
    dados.append("listaConcelhos", listaConcelhos);
    dados.append("listaFreguesias", listaFreguesias);
    dados.append("areaUtil", areaUtil);
    dados.append("areaBruta", areaBruta);
    dados.append("numWcs", numWcs);
    dados.append("anoImovel", anoImovel);
    dados.append("certEnerg", certEnerg);
    dados.append("estadoImovel", estadoImovel);
    dados.append("tipoNegocImovel", tipoNegocImovel);
    dados.append("obsImovel", obsImovel);
    dados.append("pImovel", pImovel);
    dados.append("rendaImovel", rendaImovel);
    dados.append("preçoNoite", preçoNoite);

    dados.append("fotosImovel", fotosImovel);

    $.ajax({
      url: "../assets/model/modelImovel.php",
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


  function tabImoveis(){

    let dados = new FormData();

    dados.append("op", 2);

    $.ajax({
        url: "../assets/model/modelImovel.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      $('#listaImoveis').html(resposta);

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
    tabImoveis();
  });
