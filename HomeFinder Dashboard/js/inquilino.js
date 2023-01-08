function registoInqui() {
    let nomeInqui = $("#nomeInqui").val();
    let emailInqui = $("#emailInqui").val();
    let moradaInqui = $("#moradaInqui").val();
    let telInqui = $("#telInqui").val();
    let listaDistritos1 = $("#listaDistritos1").val();
    let listaConcelhos1 = $("#listaConcelhos1").val();
    let listaFreguesias1 = $("#listaFreguesias1").val();
    let obsInqui = $("#obsInqui").val();
    


    let dados = new FormData();
    dados.append("op", 1);
    dados.append("nomeInqui", nomeInqui);
    dados.append("emailInqui", emailInqui);
    dados.append("moradaInqui", moradaInqui);
    dados.append("telInqui", telInqui);
    dados.append("listaDistritos1", listaDistritos1);
    dados.append("listaConcelhos1", listaConcelhos1);
    dados.append("listaFreguesias1", listaFreguesias1);
    dados.append("obsInqui", obsInqui);
   

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
    let emailInqui = "paulopedras93@gmail.com";
    let nomeInqui = "Paulo Pedras"; 

    let dados = new FormData();
    dados.append("op", 2);
    dados.append("nomeInqui", nomeInqui);
    dados.append("emailInqui", emailInqui);

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
      $('#emailInquiEdit').val(obj.contato);
      $('#nifInquiEdit').val(obj.nif);
      $('#moradaInquiEdit').val(obj.morada);
      $('#telInquiEdit').val(obj.contato);
      $('#listaDistritos1Edit').val(obj.distrito);
      $('#listaConcelhos1Edit').val(obj.concelho);
      $('#listaFreguesias1Edit').val(obj.freguesia);
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
    let listaDistritos1Edit = $('#listaDistritos1Edit').val();
    let listaConcelhos1Edit = $('#listaConcelhos1Edit').val();
    let listaFreguesias1Edit = $('#listaFreguesias1Edit').val();
    let obsInquiEdit = $('#obsInquiEdit').val();

    let dados = new FormData();
    dados.append('op',6);
    dados.append('id', id);
    dados.append('nomeInquiEdit', nomeInquiEdit);
    dados.append('emailInquiEdit', emailInquiEdit);
    dados.append('nifInquiEdit', nifInquiEdit);
    dados.append('moradaInquiEdit', moradaInquiEdit);
    dados.append('telInquiEdit', telInquiEdit);
    dados.append('listaDistritos1Edit', listaDistritos1Edit);
    dados.append('listaConcelhos1Edit', listaConcelhos1Edit);
    dados.append('listaFreguesias1Edit', listaFreguesias1Edit);
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
    tabInqui();
    $('#inquiTable').DataTable();
  });
