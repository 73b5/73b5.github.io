function cal(){

	var input1 = parseFloat(document.getElementsById('input1').value);
	var input2 = parseFloat(document.getElementById('input2').value);

	var opr =document.getElementById('opr').value
	
	document.getElementById('total').value = input1 + input2;
}