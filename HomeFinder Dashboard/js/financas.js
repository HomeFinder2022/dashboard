function registarReceita() {

    let valorReceita = $("#valorReceita").val();

    let dados = new FormData();
    dados.append("op", 1);

    dados.append("valorReceita", valorReceita);


    $.ajax({
      url: "../assets/model/modelFinancas.php",
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

  function registarDespesa() {

    let valorDespesa = $("#valorDespesa").val();

    let dados = new FormData();
    dados.append("op", 2);

    dados.append("valorDespesa", valorDespesa);


    $.ajax({
      url: "../assets/model/modelFinancas.php",
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

  function tabFinancas(){

    let dados = new FormData();

    dados.append("op", 3);

    $.ajax({
        url: "../assets/model/modelFinancas.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
        $('#saldoUser').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function consReceitas(){

    let dados = new FormData();

    dados.append("op", 4);

    $.ajax({
        url: "../assets/model/modelFinancas.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
        $('#saldoReceitas').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function consDespesas(){

    let dados = new FormData();

    dados.append("op", 5);

    $.ajax({
        url: "../assets/model/modelFinancas.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
        $('#saldoDespesas').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function consTransacoes(){

    let dados = new FormData();

    dados.append("op", 6);

    $.ajax({
        url: "../assets/model/modelFinancas.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
        $('#listaTransacoes').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  // This function clear all the values
function clearScreen() {
      document.getElementById("result").value = "";
  }
   
  // This function display values
  function display(value) {
      document.getElementById("result").value += value;
  }
   
  // This function evaluates the expression and returns result
  function calculate() {
      var p = document.getElementById("result").value;
      var q = eval(p);
      document.getElementById("result").value = q;
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
    tabFinancas();
    consReceitas();
    consDespesas();
    consTransacoes();
    clearScreen();
  });