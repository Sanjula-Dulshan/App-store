
cardNo=5;
ex1=0;
ex2=0;
cvv=0;


function check(){
	if(!(checkNo() && checkExp() && checkCvv())){
		alert("Payment Failed!");
	}
	else{
		alert("Payment Successfull!");
		var url = "../php/payment.php?crdNo="+cardNo+"&ex1="+ex1+"&ex2="+ex2+"&cvv="+cvv;
		//window.location.href = url;
		window.location.href = "../php/submitData.php";
		
	}
}

function isValid(){
	if(!(checkNo() && checkExp() && checkCvv())){
		return false;
	}
	else{
		return true;
	}
}


function checkNo(){
	
		var inputtxt=document.getElementById("myText").value;

		
		if(inputtxt<1000000000000000 || inputtxt>9999999999999999){
			cardNo=document.getElementById("myText").value;
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
		ex1=inputtxt;
		ex2=inputtxt2;
		return true;
	}
	
}


function checkCvv(){
	var inputtxt=document.getElementById("cvv").value;
	
	if(inputtxt<=0 || inputtxt>999){
		return false;
	}
	else{
		cvv=inputtxt;
		return true;
	}
}

