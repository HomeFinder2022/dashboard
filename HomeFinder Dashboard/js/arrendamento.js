function registoArr() {
    let imovelArr = $("#imovelArr").val();
    let inquiArr = $("#inquiArr").val();
    let inventArr = $("#inventArr").val();
    let estadoArr = $("#estadoArr").val();
    let tipoPagArr = $("#tipoPagArr").val();
    let caucaoArr = $("#caucaoArr").val();
    let docArr = $("#docArr").val();
    let dataPagamentoArr = $("#dataPagamentoArr").val();

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("imovelArr", imovelArr);
    dados.append("inquiArr", inquiArr);
    dados.append("inventArr", inventArr);
    dados.append("estadoArr", estadoArr);
    dados.append("tipoPagArr", tipoPagArr);
    dados.append("caucaoArr", caucaoArr);
    dados.append("docArr", docArr);
    dados.append("dataPagamentoArr", dataPagamentoArr);
   

    $.ajax({
      url: "../assets/model/modelArr.php",
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

  function getImoveis() {
    let dados = new FormData();
  
    dados.append("op", 2);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#imovelArr").html(resposta);
        $("#imovelArr1").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getInquilinos() {
    let dados = new FormData();
  
    dados.append("op", 3);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#inquiArr").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getInventarios() {
    let dados = new FormData();
  
    dados.append("op", 4);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#inventArr").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getDocs() {
    let dados = new FormData();
  
    dados.append("op", 8);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#docArr").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getEstado() {
    let dados = new FormData();
  
    dados.append("op", 5);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#estadoArr").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function getTipoPagamento() {
    let dados = new FormData();
  
    dados.append("op", 6);
  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      dataType: "html",
      cache: false,
      contentType: false,
      processData: false,
    })
  
      .done(function (resposta) {
        $("#tipoPagArr").html(resposta);
        })
  
      .fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
      });
  }

  function tabArr(){

    let dados = new FormData();

    dados.append("op", 7);

    $.ajax({
        url: "../assets/model/modelArr.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
      if ($.fn.DataTable.isDataTable('#arrendTable')) {
        $('#arrendTable').dataTable().fnDestroy();
    }
        $('#listaArrendamentos').html(resposta);

        $('#arrendTable').DataTable();
     

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
    getImoveis();
    getInquilinos();
    getInventarios();
    getDocs();
    getEstado();
    getTipoPagamento();
    tabArr();
    $('#arrendTable').DataTable();
  });