function time (){
    $('.form_datetime').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
       // showMeridian: 1,
        pickerPosition: "bottom-left",
        format: "dd MM yyyy hh:ii"
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
/* -------------------------------------------------------------------------------------*/


            //alert("vousavez cliqué");
            // Get the modal
            //var modalAdd = document.getElementById('exampleModal');

            // Get the <span> element that closes the modal
           // var add = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
          //  function pop() {
           //   modalAdd.style.display = "block";
           // }

            // When the user clicks on <span> (x), close the modal
           // span.onclick = function() {
            //  modalAdd.style.display = "none";
            //}

            // When the user clicks anywhere outside of the modal, close it
           // window.onclick = function(event) {
           //   if (event.target == modal) {
            //    modalAdd.style.display = "none";
            //  }
          //  }
            
        


       
          





