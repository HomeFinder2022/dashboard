function registoIntervencao() {

    let tipoInt = $("#tipoInt").val();
    let dataInt = $("#dataInt").val();
    let descInt = $("#descInt").val();
    let imovel = $("#imovelInt").val();



    let dados = new FormData();
    dados.append("op", 1);

    dados.append("tipoInt", tipoInt);
    dados.append("dataInt", dataInt);
    dados.append("descInt", descInt);
    dados.append("imovel", imovel);

    $.ajax({
      url: "../assets/model/modelIntervencao.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        sucesso(resposta);
        setTimeout(function() {
          $("#tipoInt").val("");
          $("#dataInt").val("");
          $("#descInt").val("");
          $("#imovelInt").val("");
      }, 500);
      })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }


  function getTipoInt() {
    let dados = new FormData();
  
    dados.append("op", 2);
  
    $.ajax({
      url: "../assets/model/modelIntervencao.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipoInt").html(resposta);


        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getImovel() {
    let dados = new FormData();
  
    dados.append("op", 3);
  
    $.ajax({
      url: "../assets/model/modelIntervencao.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#imovelInt").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function tabInts(){

    let dados = new FormData();

    dados.append("op", 4);

    $.ajax({
        url: "../assets/model/modelIntervencao.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#intTable')) {
      $('#intTable').dataTable().fnDestroy();
  }
      $('#listaInts').html(resposta);

      $('#intTable').DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
      });
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function tabIntsAceites(){

    let dados = new FormData();

    dados.append("op", 7);

    $.ajax({
        url: "../assets/model/modelIntervencao.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#intTableAceites')) {
      $('#intTableAceites').dataTable().fnDestroy();
  }
      $('#listaIntsAceites').html(resposta);

      $('#intTableAceites').DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
      });
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function tabIntsFeitos(){

    let dados = new FormData();

    dados.append("op", 8);

    $.ajax({
        url: "../assets/model/modelIntervencao.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#intTableFeitos')) {
      $('#intTableFeitos').dataTable().fnDestroy();
  }
      $('#listaIntsFeitos').html(resposta);

      $('#intTableFeitos').DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
      });
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function aceitaInt(id, data, nome, morada) {

    let dados = new FormData();
    dados.append("op", 5);
    dados.append("id", id);
    dados.append("data", data);
    dados.append("nome", nome);
    dados.append("morada", morada);


    $.ajax({
      url: "../assets/model/modelIntervencao.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        sucesso(resposta);
        tabInts();
        tabIntsAceites();
      })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function recusaInt(id) {

    let dados = new FormData();
    dados.append("op", 6);
    dados.append("id", id);

    
    $.ajax({
      url: "../assets/model/modelIntervencao.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        erro(resposta);
        tabInts();
        tabIntsAceites();
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
    tabInts();
    getTipoInt();
    getImovel();
    tabIntsAceites();
    tabIntsFeitos();
  });