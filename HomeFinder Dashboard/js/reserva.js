  function getImovel() {
    let dados = new FormData();
  
    dados.append("op", 1);
  
    $.ajax({
      url: "../assets/model/modelReserva.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#imovelRes").html(resposta);
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

  function registoReserva() {

    let imovelRes = $("#imovelRes").val();
    let dataEntRes = $("#dataEntRes").val();
    let dataSaiRes = $("#dataSaiRes").val();
    let descRes = $("#descRes").val();
    let numPessoas = $("#numPessoas").val();


    let dados = new FormData();
    dados.append("op", 2);

    dados.append("imovelRes", imovelRes);
    dados.append("dataEntRes", dataEntRes);
    dados.append("dataSaiRes", dataSaiRes);
    dados.append("descRes", descRes);
    dados.append("numPessoas", numPessoas);

    $.ajax({
      url: "../assets/model/modelReserva.php",
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

  function tabResFeitos(){

    let dados = new FormData();

    dados.append("op", 3);

    $.ajax({
        url: "../assets/model/modelReserva.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#resTableFeitos')) {
      $('#resTableFeitos').dataTable().fnDestroy();
  }
      $('#listaResFeitos').html(resposta);

      $('#resTableFeitos').DataTable();
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  
  function tabRes(){

    let dados = new FormData();

    dados.append("op", 4);

    $.ajax({
        url: "../assets/model/modelReserva.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#resTable')) {
      $('#resTable').dataTable().fnDestroy();
  }
      $('#listaRes').html(resposta);

      $('#resTable').DataTable();
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function tabResAceites(){

    let dados = new FormData();

    dados.append("op", 7);

    $.ajax({
        url: "../assets/model/modelReserva.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#resTableAceites')) {
      $('#resTableAceites').dataTable().fnDestroy();
  }
      $('#listaResAceites').html(resposta);

      $('#resTableAceites').DataTable();
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }
  
  function aceitaRes(id) {

    let dados = new FormData();
    dados.append("op", 5);
    dados.append("id", id);

    $.ajax({
      url: "../assets/model/modelReserva.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        sucesso(resposta);
        tabResFeitos();
        tabRes();
        tabResAceites();
      })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function recusaRes(id) {

    let dados = new FormData();
    dados.append("op", 6);
    dados.append("id", id);

    
    $.ajax({
      url: "../assets/model/modelReserva.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        erro(resposta);
        tabResFeitos();
        tabRes();
        tabResAceites();
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

  function erro(msg) {
    Swal.fire({
      position: "center",
      icon: "error",
      title: msg,
      showConfirmButton: false,
      timer: 2000,
    });
  }


  $(function () {
    getImovel();
    tabResFeitos();
    tabRes();
    tabResAceites();
  });