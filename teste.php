<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
/*'use strict'

this.desc = 'Sou ue... :P';
console.log(this.desc);

const func = function(){
	console.log(this === undefined);
}
func() ;*/

/*this.desc = 'Sou o module.exports... :P';
const obj = {desc: 'Sou o obj... :P'};

const func = function(){
	console.log(this);
}
func();

const funcBind = func.bind(obj);
funcBind();

const arrowFunc = () => console.log(this);

const arrowFuncBind = arrowFunc.bind(obj);
arrowFuncBind();*/

function Pessoa(){
	var self = this;
	self.idade = 0;

	setInterval(function(){
		self.idade++;
		console.log(self.idade);
	}, 1000);
}

new Pessoa();

//ou 

function Pessoa(){
	self.idade = 0;

	setInterval(() => {
		self.idade++;
		console.log(self.idade);
	}, 1000);
}

new Pessoa();


</script>


</body>
</html>
