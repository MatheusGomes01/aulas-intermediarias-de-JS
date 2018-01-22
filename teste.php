<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
// teste das constantes
/*var semProblema = 1;
var semProblema = 2;
console.log('semProblema =', semProblema);

var comProblema = 1;
var comProblema = 2;
console.log('comProblema =', comProblema)*/


// erro, por causa que tem que fazer a atribuição da constante e não pode atribuir o valor em outra linha.

/*const a;
a = 2;
console.log('a =', a);*/

/*var a = 2;
var b = a; // copia do valor

a --; // b continua com o valor original.

b ++; // a continua com o valor original.

console.log ('a =', a);*/

/*var p1 = {nome: 'Ana'};
var p2 = p1; //repete a constante anterior.
p2.nome = 'Bia'; // altera a constante
console.log('p1 =', p1);*/

const produto = {
	nome : 'Caneta',
	preco: 2.59
};
produto.nome = 'Notebook';

console.log(produto.nome);
produto = {};


</script>


</body>
</html>