function affichercalendrier(){
  $(document).ready(function() {

    initThemeChooser({

      init: function(themeSystem) {
        $('#calendar').fullCalendar({
          themeSystem: themeSystem,
          header: {
            left: 'prev,next today',
            center: 'title,addEvent,boutton',
            right: 'month,agendaWeek,agendaDay,listMonth'
          },


          customButtons: {
        addEvent: {
          text: 'add event',
          click: function() {

            

            // Get the modal
            var modalAdd = document.getElementById('myModal2');
            
            // Get the <span> element that closes the modal
            var add = document.getElementsByClassName("close2")[0];

            // When the user clicks the button, open the modal 
           function pop() {
              modalAdd.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            add.onclick = function() {
              modalAdd.style.display = "none";
           }

             //When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
             if (event.target == modalAdd) {
                modalAdd.style.display = "none";
              }
            }
            pop();
          }
        }
      },


          defaultDate: '2019-01-12',
          weekNumbers: true,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events
          events: [
            {
              title: 'All Day Event',
              start: '2019-01-01T07:00:00',
              end : '2019-01-01T08:00:00',
              location: 'Rue du lac de la thuile residence les bornes 1',
              description: "c'est le premier test d'affichage du popup"
            },
            {
              title: 'Long Event',
              start: '2019-01-07',
              end: '2019-01-10'
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: '2019-01-09T16:00:00'
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: '2019-01-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2019-01-11',
              end: '2019-01-13'
            },
            {
              title: 'Meeting',
              start: '2019-01-12T10:30:00',
              end: '2019-01-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2019-01-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2019-01-12T14:30:00'
            },
            {
              title: 'Happy Hour',
              start: '2019-01-12T17:30:00'
            },
            {
              title: 'Dinner',
              start: '2019-01-12T20:00:00'
            },
            {
              title: 'Birthday Party',
              start: '2019-01-13T07:00:00'
            },
            {
              
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2019-01-28',
              description: 'visiter google'

            }
          ],
          eventClick: function(calEvent, jsEvent, view) {

            //alert('Titre: ' + calEvent.title + '\n\n Description: \n\n' + calEvent.description );

           $(this).css('border-color', 'red');



            // partie affchage des popup 

            // Get the modal
            var modal = document.getElementById('myModal');
            document.getElementById('titre-popup').innerHTML = calEvent.title;
            document.getElementById('debut').innerHTML = '<br>Début:</br> ' + calEvent.start.format("DD-MM-YYYY HH:mm");
            document.getElementById('fin').innerHTML = '<br>Fin:</br> ' + calEvent.end.format("DD-MM-YYYY HH:mm");
            document.getElementById('lieu2').innerHTML = '<br>Adresse:</br> ' + calEvent.location;
            document.getElementById('description2').innerHTML = '<br>Description:</br><br />' + calEvent.description;

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var supp = document.getElementsById("supprimer").innerHTML = 'supp';


            // When the user clicks the button, open the modal 
            function popup() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            supprimer.onclick = function(){
              modal.style.display = "none";

            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            popup();
          }


        });
      },

      change: function(themeSystem) {
        $('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
      }

    });

     /*$('#datepicker').datepicker({
        inline: true,
        onSelect: function(dateText, inst) {
            var d = new Date(dateText);
            $('#fullcalendar').fullCalendar('gotoDate', d);
        }
    });*/ 
    
  });
}
affichercalendrier();