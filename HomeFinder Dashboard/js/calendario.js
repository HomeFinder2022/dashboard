function infoContato(){
    let dados = new FormData();
    dados.append('op',1);
  
    $.ajax({
      url: "../assets/model/modelEventos.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
      var events = JSON.parse(resposta);

      $('#calendar').fullCalendar({
        events: events,
        eventLimit: true,
        eventLimit: 2
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


