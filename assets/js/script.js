$(function(){
		ts = new Date(2016, 03, 1),
		newYear = true;
		//alert(ts);
		var currentDate = new Date();
		//alert(currentDate);
	if( currentDate > ts){
		
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = currentDate.getTime() + 1*4*60*60*1000;
		//alert(ts);		
		newYear = false;
		
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
			
			
			
			//note.html(message);
		}
	});
	
});
