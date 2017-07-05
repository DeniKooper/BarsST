var temp = new Date()

// Date
function time() {
	temp = new Date()
	var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']
	alert( 'Current Date is: '+ days[temp.getDay()]+" "+ temp.getDate() + "." + temp.getMonth() + "." + temp.getFullYear() + " " + temp.getHours() + "h. " + temp.getMinutes() + "m." );
}
// converter

function convertTemp() {

	input = parseInt(document.getElementById("text").value)
	if (!isNaN(input)) {
	if (document.getElementById("Fahrenheit").checked) temp = parseInt((5/9)*(input-32))
		else temp = parseInt((9/5)*input + 32)
	document.getElementById("result").innerHTML = temp
	} else alert("Incorrect input")

}

// calc


function calcSum() {
	document.getElementById("calcResult").innerHTML = parseInt(document.getElementById("a").value) + parseInt(document.getElementById("b").value)
}

function calcMult() {
	document.getElementById("calcResult").innerHTML = parseInt(document.getElementById("a").value) * parseInt(document.getElementById("b").value)
}

function calcSub() {
	document.getElementById("calcResult").innerHTML = parseInt(document.getElementById("a").value) - parseInt(document.getElementById("b").value)
}

function calcDev() {
	document.getElementById("calcResult").innerHTML = parseInt(document.getElementById("a").value) / parseInt(document.getElementById("b").value)
}