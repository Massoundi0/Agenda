function affichercalendrier(){

  $(document).ready(function() {

    initThemeChooser({

      init: function(themeSystem) {
          var initialLocaleCode = 'fr';
        $('#calendar').fullCalendar({
          themeSystem: themeSystem,
          header: {
            left: 'prev,next today',
            center: 'title,addEvent',
            right: 'month,agendaWeek,agendaDay,listMonth'
          },
            locale: initialLocaleCode,

          customButtons: {


        addEvent: {
          text: 'add event',
          click: function() {


            // Get the modal
            var modalAdd = document.getElementById('myModal2');

            // Get the <span> element that closes the modal
            var add = document.getElementsByClassName("close2")[0];
            document.getElementById('modal-titre').innerHTML = "Ajouter un Evenement";
            document.getElementById("action").value = "ajouter";
            document.getElementById("envoyer").innerHTML = "Ajouter";


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


            events: './php/model/event.php',






          eventClick: function(calEvent, jsEvent, view) {

            //alert('Titre: ' + calEvent.title + '\n\n Description: \n\n' + calEvent.description );

           //$(this).css('border-color', 'red');



            // partie affchage des popup

            // Get the modal
            var modal = document.getElementById('myModal');
            document.getElementById('titre-popup').innerHTML = calEvent.title;
            document.getElementById('debut').innerHTML = '<b>Heure de Début:</b> ' + calEvent.start.format("HH:mm");
            document.getElementById('fin').innerHTML = '<b>Heure de Fin:</b> ' + calEvent.end.format("HH:mm");
            document.getElementById('lieu2').innerHTML = '<b>Adresse:</b> ' + calEvent.location;
            document.getElementById('description2').innerHTML = '<b>Description:</b><br />' + calEvent.description;

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var supp = document.getElementById('supprimer');
            var modifer = document.getElementById('modifier');

            // When the user clicks the button, open the modal


// modifier un evenement



            modifier.onclick =function(){
              var modif = document.getElementById('myModal2');
              document.getElementById('modal-titre').innerHTML = "modifier";
              var fermerpop = document.getElementsByClassName('close2')[0];
              document.getElementById('titre').value = calEvent.title;
              document.getElementById('lieu').value = calEvent.location;
              document.getElementById('description').value = calEvent.description;
              document.getElementById('StartEv').value = calEvent.start.format("YYYY-MM-DD");
              document.getElementById('EndEv').value = calEvent.end.format("YYYY-MM-DD");
              document.getElementById("action").value = "modifier";
              document.getElementById("envoyer").innerHTML = "valider";
              document.getElementById('StartEvTime').value = calEvent.start.format('HH:mm');
              document.getElementById('EndEvTime').value = calEvent.end.format('HH:mm');


              modal.style.display = "none";

              // Get the <span> element that closes the modal
              function pop() {
              modif.style.display = "block";
            }
            fermerpop.onclick = function() {
              modif.style.display = "none";
              mise_a_zero();
           }

             //When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
             if (event.target == modif) {
                modif.style.display = "none";
                mise_a_zero();
              }
            }

            function mise_a_zero(){
              document.getElementById('titre').value ="";
              document.getElementById('lieu').value = "";
              document.getElementById('description').value = "";
              document.getElementById('StartEv').value = "";
              document.getElementById('EndEv').value = "" ;

            }


            pop();




            }

 // supprimer un evenement



            supp.onclick = function() {
              alert("voulez vous vraiment le supprimer");

              modal.style.display = "none";
            }

            function popup() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
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
          $.each($.fullCalendar.locales, function(localeCode) {
              $('#locale-selector').append(
                  $('<option/>')
                      .attr('value', localeCode)
                      .prop('selected', localeCode == initialLocaleCode)
                      .text(localeCode)
              );
          });

          // when the selected option changes, dynamically change the calendar option
          $('#locale-selector').on('change', function() {
              if (this.value) {
                  $('#calendar').fullCalendar('option', 'locale', this.value);
              }
          });
      },

      change: function(themeSystem) {
        $('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
      }

    });




  });
}
affichercalendrier();

function reafficher_formulaire(){

  var modalError = document.getElementById('myModal2');

            // Get the <span> element that closes the modal
            var fermerError = document.getElementsByClassName("close2")[0];

            // When the user clicks the button, open the modal
           function pop() {
              modalError.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            fermerError.onclick = function() {
              modalError.style.display = "none";
              "<?php unset($_SESSION['error']);";

           }

             //When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
             if (event.target == modalError) {
                modalError.style.display = "none";
                 "<?php unset($_SESSION['error']);";
              }
            }

            pop();
          }
