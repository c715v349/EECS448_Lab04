function validation()
{	
	var user = document.getElementsByName("username")[0].value;
	var pw = document.getElementsByName("password")[0].value;
	var human = parseInt(document.getElementsByName("human")[0].value);
	var dino = parseInt(document.getElementsByName("dino")[0].value);
	var feces = parseInt(document.getElementsByName("feces")[0].value);
	var s0 = document.getElementsByName("shipping")[0].value;
	var s1 = document.getElementsByName("shipping")[1].value;
	var s2 = document.getElementsByName("shipping")[2].value;
	
	//this is used from a source
	var emailFormat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//^see http://www.regular-expressions.info/tutorial.html //^see http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
	
	if (user.match(emailFormat) === null)
	{
		alert ("Invalid username");
		return false;
	}
	else if (pw == "")
	{
		alert("Password is empty");
		return false;
	}
	else if (isNaN(human) || isNaN(dino) || isNaN(feces))
	{
		alert("Shopping input invalid");
		return false;
	}
	else if (human < 0 || dino < 0 || feces < 0)
	{
		alert("Can't buy negative numbers of an item");
			return false;
	}
	else if (document.getElementsByName("shipping")[2].checked === false && document.getElementsByName("shipping")[1].checked === false && document.getElementsByName("shipping")[0].checked === false)
	{
		alert ("Choose shipping");
		return false;
	}	
	else
	{
		return true;
	}

}