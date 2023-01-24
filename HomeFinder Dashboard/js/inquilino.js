function registoInqui() {
    let nomeInqui = $("#nomeInqui").val();
    let emailInqui = $("#emailInqui").val();
    let moradaInqui = $("#moradaInqui").val();
    let telInqui = $("#telInqui").val();
    // let listaDistritos1 = $("#listaDistritos1").val();
    // let listaConcelhos1 = $("#listaConcelhos1").val();
    // let listaFreguesias1 = $("#listaFreguesias1").val();
    let obsInqui = $("#obsInqui").val();

    let nifInqui = $("#nifInqui").val();
    
    

    let dados = new FormData();
    dados.append("op", 1);
    dados.append("nomeInqui", nomeInqui);
    dados.append("emailInqui", emailInqui);
    dados.append("moradaInqui", moradaInqui);
    dados.append("telInqui", telInqui);
    // dados.append("listaDistritos1", listaDistritos1);
    // dados.append("listaConcelhos1", listaConcelhos1);
    // dados.append("listaFreguesias1", listaFreguesias1);
    dados.append("obsInqui", obsInqui);
    dados.append("nifInqui", nifInqui);
   

    $.ajax({
      url: "../assets/model/modelInqui.php",
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



  function sendEmail() {


    let nomeInqui = "Paulo Pedras"; 
    let emailInqui = "paulopedras93@gmail.com";
    let dados = new FormData();
    dados.append("op", 2);
    dados.append("emailInqui", emailInqui);
    dados.append("nomeInqui", nomeInqui);

    $.ajax({
      url: "../assets/model/modelInqui.php",
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

  function tabInqui(){

    let dados = new FormData();

    dados.append("op", 3);

    $.ajax({
        url: "../assets/model/modelInqui.php",
        method: "POST",
        data: dados,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
     
    .done(function( resposta ) {
    if ($.fn.DataTable.isDataTable('#inquiTable')) {
      $('#inquiTable').dataTable().fnDestroy();
  }
      $('#listaInqui').html(resposta);

      $('#inquiTable').DataTable();
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function delInqui(id){
    let dados = new FormData();
    dados.append('op',4);
    dados.append('id',id);
  
    $.ajax({
      url: "../assets/model/modelInqui.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      tabInqui();
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  }


  function editInqui(id){
    let dados = new FormData();
    dados.append('op',5);
    dados.append('id',id);
  
    $.ajax({
      url: "../assets/model/modelInqui.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      let obj = JSON.parse(resposta);
      $('#infoInquilino').modal('show');

      $('#nomeInquiEdit').val(obj.nome);

      $('#emailInquiEdit').val(obj.email);

      $('#nifInquiEdit').val(obj.nif);
      $('#moradaInquiEdit').val(obj.morada);
      $('#telInquiEdit').val(obj.contato);

      $('#obsInquiEdit').val(obj.obs);

      $('#btnInquilino').attr('onclick', 'guardaInquilino('+id+')');
     
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }

  function guardaInquilino(id){

    let nomeInquiEdit = $('#nomeInquiEdit').val();
    let emailInquiEdit = $('#emailInquiEdit').val();
    let nifInquiEdit = $('#nifInquiEdit').val();
    let moradaInquiEdit = $('#moradaInquiEdit').val();
    let telInquiEdit = $('#telInquiEdit').val();

    let obsInquiEdit = $('#obsInquiEdit').val();

    let dados = new FormData();
    dados.append('op',6);
    dados.append('id', id);
    dados.append('nomeInquiEdit', nomeInquiEdit);
    dados.append('emailInquiEdit', emailInquiEdit);
    dados.append('nifInquiEdit', nifInquiEdit);
    dados.append('moradaInquiEdit', moradaInquiEdit);
    dados.append('telInquiEdit', telInquiEdit);

    dados.append('obsInquiEdit', obsInquiEdit);
    
    $.ajax({
      url: "../assets/model/modelInqui.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      sucesso(resposta);
      tabInqui();
      $('#infoInquilino').modal('hide');
  
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });
  
  }


  function verificaInqui() {
   
    let confirmEmail = $("#confirmEmail").val();

    let dados = new FormData();
    dados.append("op", 7);
    dados.append("confirmEmail", confirmEmail);

    $.ajax({
      url: "../assets/model/modelInqui.php",
      method: "POST",
      data: dados,
      cache: false,
      processData: false,
      contentType: false,
      dataType: "html",
    })
  
      .done(function (resposta) {
        let obj = JSON.parse(resposta);
        if(obj.flag){
          sucesso(obj.msg);
        }else{
          erro(obj.msg);
        }
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
    tabInqui();
    $('#inquiTable').DataTable();
  });
