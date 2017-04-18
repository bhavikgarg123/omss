function ss(form)
{
	if(form.name.value == "")
	{
		alert("name can't be empty");
		return false;
	}
	if(form.name.value.length < 4)
		{
	alert("Name should contain atleast 4 characters");
	return false;
		}
	if(form.email.value == "")
		{
		alert("email can't be empty");
		return false;
		}
	if(form.email.value.indexOf("/") > -1)
		{
	window.alert("Email address has invalid character: /");
	return false;
		}
	if(form.email.value.indexOf(":") > -1)
		{
	window.alert("Email address has invalid character: :");
	return false;
		}
	if(form.email.value.indexOf(",") > -1)
		{
	window.alert("Email address has invalid character: ,");
	return false;
		}
	if(form.email.value.indexOf(";") > -1)
		{
	window.alert("Email address has invalid character: ;");
	return false;
		}
	if(form.email.value.indexOf("@") < 0)
		{
	window.alert("Email address is missing @");
	return false;
		}
	if(form.email.value.indexOf("\.") < 0)
		{
	window.alert("Email address has invalid character: \.");
	return false;
		}
	if(form.password.value == "")
	{
		alert("password can't be empty");
		return false;
	}
	if(form.password.value.length < 6)
	{
	alert("Password should contain atleast 6 characters");
	return false;
	}
	if(form.cpassword.value == "")
	{
		alert("confirm password can't be empty");
		return false;
	}
	if(form.password.value != form.cpassword.value)
	{
		alert("both passwords do not match");
		return false;
	}
	if(form.contact.value == "")
	{
		alert("contact can't be empty");
		return false;
	}
	if(form.contact.value.length < 10)
{
	alert("Number should contain 10 digits");
	return false;
}
	
	return true;
}

function validationname(field)
{
	var myvalue=document.getElementById(field).value;
	if(myvalue == "" || myvalue == null)
{
alert("please enter your name");
fieldid.name.focus();

}
}
function validationpass(field)
{
	var myvalue=document.getElementById(field).value;
	if(myvalue == "" || myvalue == null)
{
alert("please enter your password");
fieldid.name.focus();
}
}

