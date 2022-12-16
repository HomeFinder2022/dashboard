function registoContato() {
    let nomeContato = $("#nomeContato").val();
    let numContato = $("#numContato").val();
    let emailContato = $("#emailContato").val();

    let fotoContato = $('#fotoContato').prop('files')[0];

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("nomeContato", nomeContato);
    dados.append("numContato", numContato);
    dados.append("emailContato", emailContato);
    dados.append("fotoContato", fotoContato);

    $.ajax({
      url: "../assets/model/modelContato.php",
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

  function cardContatos(){

    let dados = new FormData();

    dados.append("op", 2);

    $.ajax({
        url: "../assets/model/modelContato.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
        $('#listaContatos').html(resposta);
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function infoContato(id){
    let dados = new FormData();
    dados.append('op',3);
    dados.append('id',id);
  
    $.ajax({
      url: "../assets/model/modelContato.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      let obj = JSON.parse(resposta);
      $('#infoContato').modal('show');

      $('#nomeContato1').val(obj.nome);
      $('#numContato1').val(obj.contato);
      $('#emailContato1').val(obj.email);

      $('#btnContato').attr('onclick', 'guardaContato('+id+')');
     
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function guardaContato(id){

    let nomeContato1 = $('#nomeContato1').val();
    let numContato1 = $('#numContato1').val();
    let emailContato1 = $('#emailContato1').val();
    let fotoContato = $('#fotoContato1').prop('files')[0];

    let dados = new FormData();
    dados.append('op',4);
    dados.append('id', id);
    dados.append('nomeContato1', nomeContato1);
    dados.append('numContato1', numContato1);
    dados.append('emailContato1', emailContato1);
    dados.append('fotoContato', fotoContato);
  
    $.ajax({
      url: "../assets/model/modelContato.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      cardContatos();
      $('#infoContato').modal('hide');
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function delContato(id){
    let dados = new FormData();
    dados.append('op',5);
    dados.append('id',id);
  
    $.ajax({
      url: "../assets/model/modelContato.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      cardContatos();
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
    cardContatos();
  });

