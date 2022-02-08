jQuery(document).ready(function($)
{	
$(".tfdate").datepicker({
    dateFormat: 'D, M d, yy',
    showOn: 'button',
    buttonImage: 'http://jqueryui.com/resources/demos/datepicker/images/calendar.gif',
    buttonImageOnly: true,
    numberOfMonths: 3

    });
	
 
	$('#timepicker').timepicki(); 
	$('#timepickerend').timepicki(); 
 
	
	
});

