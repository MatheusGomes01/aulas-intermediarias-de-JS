<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
/*var nome = 'Matheus';
var es5 = 'Olá' + " " + nome + '!';
var es6 = `
Olá
${nome}!`;
console.log(es5, es6);*/

/*function upper(s){
	return s.toUpperCase();
}
console.log(`1 + 1 = ${1 + 1}`);
console.log(`Ei... ${upper('cuidado')}!`);*/
 

 /*function tag (strings, ...values){
 	console.log(strings);
 	console.log(values)
 	return 'Outro valor';
 }
var aluno = 'Kar';
var status = 'Reprovado';
console.log(tag `${aluno} está ${status}`);*/


/*function real(strings, ...values){
	const resultado = [];
	values.forEach(function(value, index){
		value = (typeof value == 'number')
		 ?'R$${value.toFixed(2)}' : value;
		resultado.push(strings[index], value);
	});
return resultado.join('');
}
var preco = 29.99, parcela = 11;
console.log(real `1x de ${preco} ou 3x de ${parcela}`);*/

/*var pessoa = {nome: 'Ana', idade: 20};
var {nome, idade} = pessoa;
console.log(nome,idade);

var {nome: n, idade: i} = pessoa;
console.log(n, i);
var {genero, situacao = 'Ativa'} = pessoa;
console.log(genero, situacao);*/

/*var pessoa = {

nome: 'Ana',
endereco: {rua: 'A', numero: 1000}
};

var { endereco: {rua, numero, cep} } = pessoa;
console.log(rua, numero, cep);


var { conta: { numero, agencia } } = pessoa;
console.log(numero, agencia);*/



/*var [a] = [10];
console.log(a);

var[n1,,n3,,n5,n6 = 0] = [10,7,9,8];
console.log(n1, n3, n5, n6);

var [,[,nota]] = [[7,8,8], [9,6,8]];*/

/*function rand({min = 0, max = 1000}){
	var value = Math.random() * (max - min);
	return Math.floor(value) + min;
}

console.log(rand({max: 50, min: 40}));
console.log(rand({min: 955}));
console.log(rand({}));
console.log(rand());*/


function rand({min = 0, max = 1000}){
	if(min > max) [min, max] = [ max, min];
	var value = Math.random() * (max - min);
	return Math.floor(value) + min;
}

console.log(rand([50, 40]));
console.log(rand([992]));
console.log(rand([,10]));
console.log(rand([]));
console.log(rand());


</script>


</body>
</html>
