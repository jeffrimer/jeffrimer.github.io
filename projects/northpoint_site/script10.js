function initPage() {
	var expireDate = new Date();
	expireDate.setMonth( expireDate.getMonth()+1 );
	
	var hitCt = parseInt( cookieVal( "pageHit" ) );
	hitCt++;
	
	document.cookie = "pageHit=" + hitCt + ";expires=" + expireDate.toGMTString();
	// Display the user mesage in the document
		document.getElementById( "pageHits" ).innerHTML = "You have visited this page " + hitCt + " times.";
}

function cookieVal( cookieName ) {
	var thisCookie = document.cookie.split( "; " );
	
	for( var i=0; i<thisCookie.length; i++ ) {
		if( cookieName == thisCookie[i].split( "=" )[0] ) {
			return thisCookie[i].split( "=" )[1];
		}
	}
	return 0;
}

function initDate() {
	var dayName = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	var monName = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	var now = new Date();
	var dtString = dayName[now.getDay()] + " - " + monName[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
	
	document.getElementById( "dtField" ).innerHTML = timeString(now.getHours()) + " Today is: " + dtString;
	
	function timeString( theHour ) {
		if( ( theHour >= 20 ) || ( theHour <= 6 ) ) {
			return "Good Evening!";
		} else if( ( theHour <= 6 ) || ( theHour <= 12 ) ) {
			return "Good Morning!";
		} else {
			return "Good Afternoon!";
		}
	}	
}