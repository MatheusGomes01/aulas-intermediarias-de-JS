<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>

var nome = 'Bia', anoNascimento = 1981;
function idade() {
	return new Date().getFullYear() - anoNascimento;
}

var pessoa = {
	nome: nome,
	anoNascimento: anoNascimento,
	idade: idade,
	toString: function(){return `${nome} = ${idade()}`}
};
console.log(pessoa.toString());
</script>


</body>
</html>
