function registoInventario() {

    let imovelArr1 = $("#imovelArr1").val();
    let docInvent = $('#docInvent').prop('files')[0];

    let dados = new FormData();
    dados.append("op", 1);

    dados.append("docInvent", docInvent);
    dados.append("imovelArr1", imovelArr1);


    $.ajax({
      url: "../assets/model/modelInventario.php",
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


  function tabInventarios(){

    let dados = new FormData();

    dados.append("op", 2);

    $.ajax({
        url: "../assets/model/modelInventario.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      if ($.fn.DataTable.isDataTable('#inventTable')) {
        $('#inventTable').dataTable().fnDestroy();
    }
        $('#listaInventario').html(resposta);

        $('#inventTable').DataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
          }
        });
     

    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function getTipoDoc() {
    let dados = new FormData();
  
    dados.append("op", 3);
  
    $.ajax({
      url: "../assets/model/modelInventario.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipoDoc").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function registoDocumento() {

    let refDoc = $("#refDoc").val();
    let tipoDoc = $("#tipoDoc").val();
    let userDoc = $('#userDoc').prop('files')[0];

    let dados = new FormData();
    dados.append("op", 4);

    dados.append("tipoDoc", tipoDoc);
    dados.append("userDoc", userDoc);
    dados.append("refDoc", refDoc);

    $.ajax({
      url: "../assets/model/modelInventario.php",
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

  function tabDocs(){

    let dados = new FormData();

    dados.append("op", 5);

    $.ajax({
        url: "../assets/model/modelInventario.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      if ($.fn.DataTable.isDataTable('#docsTable')) {
        $('#docsTable').dataTable().fnDestroy();
    }
        $('#listaDocss').html(resposta);

        $('#docsTable').DataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
          }
        });
     

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
    tabInventarios();
    getTipoDoc();
    $('#inventTable').DataTable();
    tabDocs();
    $('#docsTable').DataTable();
  });