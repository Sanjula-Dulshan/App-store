
function check(){
	if(!(checkNo() && checkExp() && checkCvv())){
		alert("Payment Failed >>>>>>!")
	}
	else{
		alert("Payment Successfull!")
	}
	
	
	window.location.href = "..\php\payment.php?w1=" + hello + "&w2=" + world;

}


function checkNo(){
	
		var inputtxt=document.getElementById("myText").value;

		
		if(inputtxt<1000000000000000 || inputtxt>9999999999999999){
			return false;
		}
		else{
			return true;
		}
}


function checkExp(){
	var inputtxt=document.getElementById("ex1").value;
	var inputtxt2=document.getElementById("ex2").value;
	
	if(inputtxt<=0 || inputtxt>12){
		return false;
	}
	
	else if(inputtxt2<20){
		return false;
	}
	
	else{
		return true;
	}
	
}


function checkCvv(){
	var inputtxt=document.getElementById("cvv").value;
	
	if(inputtxt<=0 || inputtxt>999){
		return false;
	}
	else{
		return true;
	}
}

