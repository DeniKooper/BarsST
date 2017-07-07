// Написать функцию возведения в степень. 
// В объекте с несколькими свойствами все числовые значения возвести в степень,
// равную значению элемента.

function pow(value, p) {
	m=value;
	if (p>=0) 
		for (i=0;i<p-1;i++)
			value *=m;
	else {
		value = 1/m;
		for (i=0;i<p-1;i++)
			value /=m;
	}
	return value;
}

function powO(value) {
	for (v in value) {
		if (!isNaN(value[v]))
			value[v]=pow(value[v],value[v])
		else 
			if (/[0-9]/.test(value[v])) {
				temp1 = value[v].split(/[a-zA-Z]+/);
				temp2 = value[v].split(/[0-9]+/);
				temp1=powO(temp1);
				for (t in temp1) 
					temp1[t]=temp1[t]+temp2[t]+"";
				value[v]=temp1.join("");
			}
		}
	return value;
}

function iskra () {
	this.q = 77;
	this.w = "Cube";
	this.e = "Siri";
	this.r = 4;
	this.t = "Life Hack";
	this.y = 9;
	this.u = 13;
	this.i = "TRUE32Skill7";
	this.o = "7"
}

// function iskra () {
// 	this.q = 1,8188037387806198379277339915557e+145;
// 	this.w = "Cube";
// 	this.e = "Siri";
// 	this.r = 256;
// 	this.t = "Life Hack";
// 	this.y = 387420489;
// 	this.u = 302875106592253;
// 	this.i = "Skill";
// 	this.o = "823543"
// }

function session() {
	test = new iskra()
	test = powO(test);
	temp = "";
	for (t in test)
		temp +="<p>"+test[t]+"</p>";
	document.getElementById("result").innerHTML=temp;
}


