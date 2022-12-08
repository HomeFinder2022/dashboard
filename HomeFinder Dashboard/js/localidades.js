function getDistritos() {
    let dados = new FormData();
  
    dados.append("op", 1);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#listaDistritos").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getConcelhos() {
    let dados = new FormData();
  
    dados.append("op", 2);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#listaConcelhos").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getFreguesias() {
    let dados = new FormData();
  
    dados.append("op", 3);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#listaFreguesias").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getTipoNegocio() {
    let dados = new FormData();
  
    dados.append("op", 4);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipoNegocImovel").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getEstado() {
    let dados = new FormData();
  
    dados.append("op", 5);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#estadoImovel").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getCertEnerg() {
    let dados = new FormData();
  
    dados.append("op", 6);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#certEnerg").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  
  function getTipoImovel() {
    let dados = new FormData();
  
    dados.append("op", 7);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipoImovel").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getTipologia() {
    let dados = new FormData();
  
    dados.append("op", 8);
  
    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipologiaImovel").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function filtroImovel(id){

    let dados = new FormData();

    dados.append("op", 9);
    dados.append("id", id);

    $.ajax({
        url: "../assets/model/modelLocalidades.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      $('#precoImovel').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function filtroTipologia(id){

    let dados = new FormData();

    dados.append("op", 10);
    dados.append("id", id);

    $.ajax({
        url: "../assets/model/modelLocalidades.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      // if(this.value == 1 || this.value == 2 || this.value == 3){
        $("#tipologiaVenda").html(resposta);
      // }

    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function filtroDistrito(id) {
    let dados = new FormData();
  
    dados.append("op", 11);
    dados.append("id", id);

    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#listaConcelhos").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }


  function filtroConcelho(id) {
    let dados = new FormData();
  
    dados.append("op", 12);
    dados.append("id", id);

    $.ajax({
      url: "../assets/model/modelLocalidades.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#listaFreguesias").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  $(function () {
    getDistritos();
    getConcelhos();
    getFreguesias();
    getTipoNegocio();
    getEstado();
    getCertEnerg();
    getTipoImovel();
    getTipologia();
    // $('#tipoNegocImovel').select2();
    // $('#tipoImovel').select2();
    // $('#listaDistritos').select2();
    // $('#listaConcelhos').select2();
    // $('#listaFreguesias').select2();
    // $('#certEnerg').select2();
    // $('#estadoImovel').select2();
  });

  