function getNome(){

    let dados = new FormData();

    dados.append('op',1);
  
    $.ajax({
      url: "../assets/model/modelDados.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
       $('#nomeUser1').html(resposta);
       $('#nomeUser2').html(resposta);
        
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function getTipo(){

    let dados = new FormData();

    dados.append('op',2);
  
    $.ajax({
      url: "../assets/model/modelDados.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
       $('#tipoUser').html(resposta);
       $('#tipoUser1').html(resposta);
   
        
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function getFotos(){

    let dados = new FormData();

    dados.append('op',3);
  
    $.ajax({
      url: "../assets/model/modelDados.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      // $('#fotoperfil').attr('src',(resposta));
      // $('#fotoperfil1').attr('src',(resposta));
      $('#fotoperfil2').attr('src',("../../../fase1/"+resposta));
      $('#fotoperfil3').attr('src',("../../../fase1/"+resposta));
        
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  $(function() {
    getTipo();
    getNome();
    getFotos();
  });