// function openmodal(){

// $('#modalOpenlogin').modal('show');

// }


// function login(){

//     let user = $('#user').val();
//     let pass = $('#pass').val();

//     let dados = new FormData();

//     dados.append('op',1);
//     dados.append('user',user);
//     dados.append('pass',pass);
  
//     $.ajax({
//       url: "assets/model/modelLogin.php",
//       method: "POST",
//       data: dados,
//       cache:false,
//       processData:false,
//       contentType: false,
//       dataType: "html"
//     })
     
//     .done(function( resposta ) {
//         let obj = JSON.parse(resposta);
//         if(obj.flag){
//             sucesso(obj.msg);
   
//             setTimeout(function(){ 
//                 window.location.assign('index.php')
//              }, 2000);
//         }else{
//             erro(obj.msg);
//         }
        
//     })
     
//     .fail(function( jqXHR, textStatus ) {
//       alert( "Request failed: " + textStatus );
//     });
  
//   }

  function logout(){
 
    let dados = new FormData();

    dados.append('op',2);
  
    $.ajax({
      url: "../../../fase1/assets/model/modelLogin.php",
      method: "POST",
      data: dados,
      cache:false,
      processData:false,
      contentType: false,
      dataType: "html"
    })
     
    .done(function( resposta ) {
        sucesso(resposta)
        setTimeout(function(){ 
          window.location.assign('../../../fase1/index.php')
       }, 2000);
        
    })
     
    .fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );
    });

  }

  function sucesso(msg){
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: msg,
      showConfirmButton: false,
      timer: 2000
    })
  }
  
  // function erro(msg){
  //   Swal.fire({
  //     position: 'center',
  //     icon: 'error',
  //     title: msg,
  //     showConfirmButton: false,
  //     timer: 2000
  //   })
  // }