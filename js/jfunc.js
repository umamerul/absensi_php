$(document).ready(function(){
    $("#field1").keyup(function(){
	    $("#result").val($("#field1").val());
	});

    $("#jam").show(function getdate(){
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
         if(s<10){
             s = "0"+s;
         }

        $("#jam").text(h+" : "+m+" : "+s);
         setTimeout(function(){getdate()}, 500);
    });

    $("#from").datepicker({
        defaultDate: "+1w",
        changeMonth: false,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onClose: function( selectedDate ) {
            $( "#to" ).datepicker( "option", "minDate", selectedDate );
        }
    });

    $("#from1").datepicker({
        defaultDate: "+1w",
        changeMonth: false,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onClose: function( selectedDate ) {
            $( "#to" ).datepicker( "option", "minDate", selectedDate );
        }
    });

});