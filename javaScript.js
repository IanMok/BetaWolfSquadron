//regEx validation for login fields
function validateFields() {

    var re = /^[\w ]+$/;
    var reEmail = /.+@.+\..+/i;
	
	
	if (document.loginForm.email.value == "" || !reEmail.test(document.loginForm.email.value)) 
	{
		alert("E-Mail cannot be empty and must contain '@'.")
		document.loginForm.email.focus();
		return false;
    }
    /*else if (!reEmail.test(document.contactForm.email.value)) {
        alert("Input contains invalid characters")
        contactForm.email.focus();
        return false;
    }*/
	
	//check password field for empty value
    if (document.loginForm.pwd.value == "") 
	{
        alert("password field cannot be empty")
        document.loginForm.pwd.focus();
        return false;
    }
	
	//visual feedback onSubmit
    alert("Form Successfully Submitted")
    return true;
}