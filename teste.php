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

var pessoa = {

nome: 'Ana',
endereco: {rua: 'A', numero: 1000}
};

var { endereco: {rua, numero, cep} } = pessoa;
console.log(rua, numero, cep);


var { conta: { numero, agencia } } = pessoa;
console.log(numero, agencia);
</script>


</body>
</html>
