 function checkPassword() { 
	var pswd = document.getElementById('pswd').value; 
	var cpswd = document.getElementById('cpswd').value; 

	if (pswd == '') 
		alert ("Please enter Password"); 
		  
	
	else if (cpswd == '') 
		alert ("Please enter confirm password"); 
		        
	else if (pswd != cpswd) { 
		alert ("Password did not match, Please try again");
		
	} 

} 




function chkpswd(form) {
  if (document.getElementById('pswd').value == document.getElementById('cpswd').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

function enableBtn(){
	if(document.getElementById("email").value)
	
	{   
        document.getElementById("sendCodeBtn").disabled = false;}
  
  else{
	  
	  document.getElementById("sendCodeBtn").disabled = true;
  }

	if(document.getElementById("code").value)
	
	{   
        document.getElementById("submitBtn").disabled = false;}
  
  else{
	  
	  document.getElementById("submitBtn").disabled = true;
  }
}


