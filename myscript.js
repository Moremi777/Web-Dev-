var a = 10;
var b = 5;
var c = a * b;


function getval(id, text){
	document.getElementById(id).innerHTML = text;
}

function yesnoCheck(){
	if (document.getElementById('yesCheck').checked){
		document.getElementById('ifYes').style.display = 'none';
	}

	else {
		document.getElementById('ifYes').style.display = 'block';
	}

}