// Jeff Rimer
// Project #2
// September 8, 2011
// Validation of form on the sign-up.html page for the Northpoint Elementary website

window.onload = initForms;

function initForms() {
	for( var i=0; i<document.forms.length; i++ ) {
		document.forms[i].onsubmit = function() {return validForm();}
	}
}

function validForm() {
	var inputarray = document.getElementsByTagName("input");
	/* collect all the input statements in the form */
	var selectarray = document.getElementsByTagName("select");
	/* collect all the select statements in the form */
	
	/* this input statement points to : firstname */
	if( inputarray[0].value == "" ) {
		window.alert( "A first name is required." );
		inputarray[0].className = "invalid"; /* notice the .css file for input */
		inputarray[0].select();
		inputarray[0].focus(); /* put the focus on the first name field */
		inputarray[0].onblur = fieldCheck; /* run the fieldCheck function to clear the highlight */
		return false;
	}
	
	/* this input statement points to : lastname */
	if( inputarray[1].value == "" ) {
		window.alert( "A last name is required." );
		inputarray[1].className = "invalid"; /* notice the .css file for input */
		inputarray[1].select();
		inputarray[1].focus(); /* put the focus on the first name field */
		inputarray[1].onblur = fieldCheck; /* run the fieldCheck function to clear the highlight */
		return false;
	}
	
	/* this input statement points to : streetaddress */
	if( inputarray[2].value == "" ) {
		window.alert( "A street address is required." );
		inputarray[2].className = "invalid"; /* notice the .css file for input */
		inputarray[2].select();
		inputarray[2].focus(); /* put the focus on the first name field */
		inputarray[2].onblur = fieldCheck; /* run the fieldCheck function to clear the highlight */
		return false;
	}
	
	/* this input statement points to : cityname */
	if( inputarray[3].value == "" ) {
		window.alert( "A city name is required." );
		inputarray[3].className = "invalid"; /* notice the .css file for input */
		inputarray[3].select();
		inputarray[3].focus(); /* put the focus on the first name field */
		inputarray[3].onblur = fieldCheck; /* run the fieldCheck function to clear the highlight */
		return false;
	}
	
	// state is not an input field so it can not be selected()
	if( selectarray[0].value == "" ) {
		window.alert( "A state is required." );
		selectarray[0].className = "invalid";
		selectarray[0].focus(); //puts the focus on the state field
		return false;
	}
	
	// using a regular expresion, check for a valid zip code
	var zipCheck = /(^\d{5}$)/;
	var zipNum = document.forms[0].zip.value;
	if( zipCheck.test( zipNum ) == false ) {
		window.alert( "Invalid zip code, must be a 5 digit number." );
		inputarray[4].focus();
		inputarray[4].className = "invalid";
		document.forms[0].zip.onblur = fieldCheck;
		return false;
	}
	
	// this input statement point to : phone
	if( inputarray[5].value == "" ) {
		window.alert( "A phone number is required." );
		inputarray[5].className = "invalid";
		inputarray[5].select();
		inputarray[5].focus(); // put the focus on the phone field
		return false;
	}
	
	var num = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
	var number = document.forms[0].phone.value;
	if( num.test( number ) == false ) {
		alert( "Invalid phone number combination." );
		inputarray[5].focus();
		inputarray[5].className = "invalid";
		document.forms[0].phone.onblur = fieldCheck; // run the fieldCheck function to clear the highlight
		return false;
	}
	
	// check to see if a grade level has been selected
	if( !checkRadio() ) {
		window.alert( "Please select your child's grade level." );
		document.forms[0].gradelevel[0].focus();
		return false;
	}
	
	// opt in validation
	if( document.forms[0].optin.checked == false ) { // this code had to be entered manually because it has a checked value
		window.alert( "You must agree to receiving emails from NorthPoint Elementary." );
		document.forms[0].optin.focus();
		return false;
	}
		
	// email address check
	if( document.forms[0].email.value == "" || document.forms[0].email.value == "Enter your e-mail address" ) {
		window.alert( "You must enter your email address." );
		document.forms[0].email.className = "invalid";
		document.forms[0].email.focus();
		return false;
	}
	
	/* validate teh email address input with a regular expression.  the pattern title was written by david huyck.  "matches e-mail addresses, including some of the newer top-level-domain extensions, such as info, museum, name, etc. also allows for emails tied directly to IP addresses."
	http://regexlib.com/DisplayPatterns.aspx.  page 203 of your book provides a very useful table. */
	
	var reg = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))$/;
	var address = document.forms[0].email.value;
	if( reg.test( address ) == false ) {
		alert( "Invalid Email Address.  Be sure to enter your complete email address." );
		document.forms[0].email.className = "invalid";
		document.forms[0].email.onblur = fieldCheck; // run the fieldCheck function to clear the highlight
		return false;
	}
}
	
// checkRadio function starts
// this function is called from within the if statement of the age groups radio button check
function checkRadio() {
	var levelselected = false;
	for( var i=0; i<document.forms[0].gradelevel.length; i++ ) {
		if( document.forms[0].gradelevel[i].checked == true ) {
			levelselected = true;
			break;
		}
	}
	return levelselected;
}

// confirmReset function starts
// this function is called from within the radio button check
function confirmReset() { // if the user resents the for information, this message will display
	var resetForm = window.confirm( "Are you sure you want to reset this form?" );
	if( resetForm == true ) {
		var inputarray = document.getElementsByTagName( "input" );
		for( var k=0; k<inputarray.length; k++ ) {
			inputarray[k].className = "reset";
		}
		return true;
	}
	return false;
}
	
function fieldCheck() {
	this.classname = "reset";
}