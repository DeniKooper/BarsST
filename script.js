var temp = new Date()

// Date
function time() {
	temp = new Date()
	alert( 'Current Date is: '+ temp.getDate() + "." + temp.getMonth() + "." + temp.getFullYear() + " " + temp.getHours() + "h. " + temp.getMinutes() + "m." );
}
// converter

function convertTemp() {

	input = parseInt(document.getElementById("text").value)

	if (document.getElementById("Fahrenheit").checked) temp = parseInt((5/9)*(input-32))
		else temp = parseInt((9/5)*input + 32)
	document.getElementById("result").innerHTML = temp

}