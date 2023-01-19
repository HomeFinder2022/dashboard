var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];
$(function() {
    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime });
        })
    }
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'title',
        },
        locale: 'pt',
        displayEventTime: false,
          navLinks: true, // can click day/week names to navigate views
          selectable: true,
          selectMirror: true,
          events: events,
          eventClick: function(info) {
            var _details = $('#event-details-modal')
            var id = info.event.id
            if (!!scheds[id]) {
                _details.find('#title').text(scheds[id].title)
                _details.find('#description').text(scheds[id].description)
                var sdate = moment(scheds[id].sdate).locale('pt-br').format('YYYY-MM-DD HH:mm:ss');
                var edate = moment(scheds[id].edate).locale('pt-br').format('YYYY-MM-DD HH:mm:ss');
                _details.find('#start').text(sdate)
                _details.find('#end').text(edate)
                _details.find('#edit,#delete').attr('data-id', id)
                _details.modal('show')
            } else {
                alert("Event is undefined");
            }
        },
        // eventDidMount: function(info) {
        //     // Do Something after events mounted
        // },
        editable: true
    });

    calendar.render();

    // Form reset listener
    // $('#schedule-form').on('reset', function() {
    //     $(this).find('input:hidden').val('')
    //     $(this).find('input:visible').first().focus()
    // })

    // Edit Button
    // $('#edit').click(function() {
    //     var id = $(this).attr('data-id')
    //     if (!!scheds[id]) {
    //         var _form = $('#schedule-form')
    //         _form.find('[name="id"]').val(id)
    //         _form.find('[name="title"]').val(scheds[id].title)
    //         _form.find('[name="description"]').val(scheds[id].description)
    //         _form.find('[name="start_datetime"]').val(moment(scheds[id].start_datetime).locale('pt-br').format('LLL')+'T'+moment(scheds[id].start_datetime).format('HH:mm'))
    //         _form.find('[name="end_datetime"]').val(moment(scheds[id].end_datetime).locale('pt-br').format('LLL')+'T'+moment(scheds[id].end_datetime).format('HH:mm'))
    //         $('#event-details-modal').modal('hide')
    //         _form.find('[name="title"]').focus()
    //     } else {
    //         alert("Event is undefined");
    //     }
    // })

})


$('#delete').click(function() {
    $('#event-details-modal').modal('hide');
    var id = $(this).attr('data-id');
    $.ajax({
        type: "GET",
        url: "delete_schedule.php",
        data: {id: id}

    });
    if (!!scheds[id]) {
            Swal.fire({
            title: 'Tem a certeza que pretende eliminar este evento?',
            text: "Não será possivel recuperar o evento novamente.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2FCB6A',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, apagar!'
          }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Evento foi eliminado com sucesso',
                    showConfirmButton: false,
                    timer: 2500
                  })
                  setTimeout(function(){ location.reload(true); }, 2500);
             
            }
          })

    } else {
        alert("Event is undefined");
    }
});

function sucesso(msg) {
    Swal.fire({
      position: "center",
      icon: "success",
      title: msg,
      showConfirmButton: false,
      timer: 2000,
    });
  }

 