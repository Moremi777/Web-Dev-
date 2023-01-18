<?php

if (isset($_POST["lessons"]))
{
	$var = $_POST["lessons"];
}
else
{
	$var = array("Tony", "Steve", "Jeff", "Franklin");
	//$var = arrayss
	//(
	//array("Volvo ", 22, 18),
	//array("BMW ", 15, 13),
	//array("Suzuki ", 5, 2),
	//array("Porche ", 17, 15)
	//);
} 

//$var = 4;
//$var1 = 6;

$var2 = "<html>
<head><script type = text/javascript src = 'myscript.js'></script></head>
<body><h1 id = val2> This is a form </h1>
<form action = 'http://localhost/lessons/index2.php'method ='POST' id = 'form1'>  Name:
<input type = 'text' name = 'name'> </input> <br/>
<p id = 'value1'><b> What lessons do you want to learn? </b></p><br/>
<select name = 'lessons[]' size = '5' width = '10' multiple> 
	<option value = 'mysql'> My SQL </option>
	<option value = 'web_dev'> Web Dev </option>
	<option value = 'oracle'> Oracle </option>
	<option value = 'javascript'> Javascript </option>
	<option value = 'cloud'> Cloud </option>
</select>

<p> Are you learning from our videos? </p>
Yes
<input type = \"radio\" onclick = \"javascript:yesnoCheck();\" name = \"yesno\" id = \"yesCheck\"> No
<input type = \"radio\" onclick = \"javascript:yesnoCheck();\" name = \"yesno\" id = \"noCheck\">
<br>
<div id = \"ifYes\" style = \"display:none\"> If no, please explain: 
	<input type = 'text' id = 'yes' name = 'yes'/>
</div>

<input type = 'submit' value = 'Submit'>
<br><br/>
<button onclick = \"document.getElementById('value1').innerHTML=Date(); return false;\"> Update </button>
</form>

<script>

//var a = 10;
//var b = 5;
//var c = a * b;

//function getval(t, y){
	//return t*y;
//}

//function getval(id){
	//return document.getElementById(id).innerHTML;
//}

//function getval(id, text){
	//document.getElementById(id).innerHTML = text;
//}

//var functionvar = getval(5, 5);

//var functionvar = getval('value1');

//window.location = 'http://localhost/lessons/project_1';

//var htmlval = document.getElementById('value1').innerHTML;

//alert(htmlval);
//alert(functionvar);

//getval('value1', 'New value');
//getval('val2', 'Welcome to Web Development');

//setTimeout(\"location.href = 'http://localhost/lessons/project_1'\", 3000);

	function validateForm() {
		var name = form[\"name\"].value;

		if (name === \"\"){
			alert(\"Name cannot be left blank.\");
			return false;
		}
	}

	var form = document.getElementById(\"form1\");
	form.onsubmit = validateForm;

var myObj = {'name':'John','age': 30};
var myJSON = JSON.stringify(myObj);
var myObj2 = JSON.parse(myJSON);

getval('value1',myObj2.name);


</script>

</body>
</html>";

//array_push($var, "Billy");
//array_pop($var);
//$var[2] = "Arnold";

//foreach($var as $index)
//{
	//foreach ($index as $value) {
		//echo $value;
	//}
	//echo $index." ";
	//echo "<br/>";
//}

//echo $var + $var1;
//print_r($var);
echo $var2;


?>