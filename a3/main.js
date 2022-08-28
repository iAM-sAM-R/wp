function calculate(){
	var seat = document.getElementById('seat').value;

	var sValue = 0;
	if(seat=='STA'){
		sValue= '20.50';
	}else if(seat=='STP'){
		sValue= '18.00';
	}else if(seat=='STC'){
		sValue= '16.50';
	}else if(seat=='FCA'){
		sValue= '30.00';
	}else if(seat=='FCP'){
		sValue= '27.00';
	}else if(seat=='FCC'){
		sValue= '24.00';
	}



	if(document.getElementById('radio1').checked==true){
		sValue = (sValue*30)/100;
	}else if(document.getElementById('radio2').checked==true){
		sValue = (sValue*30)/100;
	}

	var sCount = document.getElementById('sCount').value;

	if(sCount=='' || sCount==0){
		document.getElementById('sCount').value = 1;

		sCount=1;
	}

	document.getElementById('total').value = (sValue*sCount);
}