<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
// scoopo global
/*{{{{ var sera = 'será???';}}}}
console.log(sera);*/

//com var ou let dentro do {}
/*var numero = 1;
{
	let nuemro = 2;
	console.log('dentro =',numero);
}
console.log('fora =', numero);*/

// let e var dentro do loop
// com var o i=10, com let da um undefined
/*for(let i = 0; i < 10; i++){}
	console.log('i =', i);*/

// com var sempre irá dar o "10", com let vai aparecer as funcs definidas.
/*var funcs =[];
for(let i = 0; i < 10; i++){
	funcs.push(function(){
		console.log(i);
	});
}
funcs[2]();
funcs[8]();*/


// erros de undefined com var e erros com let
/*console.log('a =', a);
var a = 2;

console.log('b =', b);
let b = 2; */

// const
var a = 2;
{
	const a = 3;
	console.log(a);
}

console.log(a);


</script>


</body>
</html>