//regEx validation for login fields
function validateFields() {

    var re = /^[\w ]+$/;
    var reEmail = /.+@.+\..+/i;
	
	//if value of email field in loginForm equals blank OR regEx test value of email field in loginForm fails
	if (document.loginForm.email.value == "" || !reEmail.test(document.loginForm.email.value)) 
	{	
		//pop-up alert
		alert("E-Mail cannot be empty and must contain '@'.")
		//give focus to email field in loginForm
		document.loginForm.email.focus();
		return false;
    }
    /*else if (!reEmail.test(document.contactForm.email.value)) {
        alert("Input contains invalid characters")
        contactForm.email.focus();
        return false;
    }*/
	
	//check password field for empty value
	//if the value of the pwd field in loginForm in the document equals blank
    if (document.loginForm.pwd.value == "") 
	{	
		//pop-up alert
        alert("password field cannot be empty")
        //give focus to pwd field in loginForm
		document.loginForm.pwd.focus();
        return false;
    }
	
	//visual feedback onSubmit
    alert("Form Successfully Submitted")
    return true;
}