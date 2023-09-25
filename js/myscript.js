function checkPassword()
{
	if(document.getElementById("pwd1").value == document.getElementById("pwd2").value)
	{	
	}
	else 
	{
		alert("Passwords Missmatched")
	}
}

function enablebtn(){
	if(document.getElementById("chk").checked)
	
	{   
        document.getElementById("reg").disabled = false;}
  
  else{
	  
	  document.getElementById("reg").disabled = true;
  }
}

function pw1()
{
	document.getElementById("pwd1").disabled=false;
	document.getElementById("pwd2").disabled=false;
	document.getElementById("pwd3").disabled=false;
}


