function registoArr() {
    let imovelArr = $("#imovelArr").val();
    let inquiArr = $("#inquiArr").val();
    let inventArr = $("#inventArr").val();
    // let estadoArr = $("#estadoArr").val();
    let tipoPagArr = $("#tipoPagArr").val();
    let caucaoArr = $("#caucaoArr").val();
    let docArr = $("#docArr").val();
    let dataPagamentoArr = $("#dataPagamentoArr").val();

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("imovelArr", imovelArr);
    dados.append("inquiArr", inquiArr);
    dados.append("inventArr", inventArr);
    // dados.append("estadoArr", estadoArr);
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
        setTimeout(function() {
          $("#imovelArr").val("");
          $("#inquiArr").val("");
          $("#inventArr").val("");
          $("#tipoPagArr").val("");
          $("#caucaoArr").val("");
          $("#docArr").val("");
          $("#dataPagamentoArr").val("");
      }, 500);
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

        $('#arrendTable').DataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
          }
        });
     

    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function editArr(id){
    let dados = new FormData();
    dados.append('op',9);
    dados.append('id',id);

    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      let obj = JSON.parse(resposta);
      $('#infoArr').modal('show');

      $('#moradaArrEdit').val(obj.morada);
      $('#dataPagamentoArrEdit').val(obj.datapagamento);
      $('#inquiArrEdit').val(obj.inquilino);
      $('#precoRendaEdit').val(obj.precorenda);
      // $('#precoRendaEdit').val(obj.precorenda+" €");
      // nao da para colocar € a frente do precorenda


      $('#btnRenda').attr('onclick', 'confirmaRenda('+obj.precorenda+')');
     
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function confirmaRenda(preco){

    let inquilino = $('#inquiArrEdit').val();
    
    let dados = new FormData();
    dados.append('op',10);
    dados.append('preco', preco);
    dados.append('inquilino', inquilino);

  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      $('#infoArr').modal('hide');
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function concluiArr(id){

    
    let dados = new FormData();
    dados.append('op',11);
    dados.append('id', id);

  
    $.ajax({
      url: "../assets/model/modelArr.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      tabArr();
  
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