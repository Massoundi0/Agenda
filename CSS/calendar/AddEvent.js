function time (){
    $('.form_datetime').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });

}
time();


// -----------------------------------------------------------------------------------------

 function afficher_page_AddEvent() {


            // partie affchage des popup 

            // Get the modal
            var addEv = document.getElementById('ADDEVENT');
            
            // Get the <span> element that closes the modal
            var span = document.getElementsById("closeEV")[0];

            // When the user clicks the button, open the modal 
            function popup() {
              addEv.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              addEv.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == addEv) {
                modal.style.display = "none";
              }
            }
            popup();
          }



