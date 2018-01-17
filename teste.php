<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<body>

<h3>Expressões Regulares</h3>
<form id="formulario">
<fieldset>
	<legend>Validação e Formatação</legend>
	
	<label for="cpf">CPF:<label>
	<input type="text" name="cpf" />

	<label for="email">Email:<label>
	<input type="text" name="email" />

<a href="#" onclick="validar()">Validar</a>
</fieldset>
</form>

<script>
/*
FUNÇÕES 
- test()
- exec()
- str.match()
- str.replace()

MODIFICADORES
- i
- g
- m

METACARACTERES 
- (-)
- \w
- \s
- \d
- ^
- $

QUANTIFICADORES
- +
- *
- ?
- {}

AGRUPADORES
- [0-9]
- [a-z]*/
	function validar(){
		var formulario = document.getElementById("formulario");
		var cpf = formulario.cpf;
		var email = formulario.email;

		var re_cpf = /^ ([\w+] {3}) ([\d] {3}) ([\d] {3}) ([\d] {2})$/;
		var re_email = /^([\w-]+(\.[\w-]+)*)@(( [\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(\.[a-z]{2})?)$/i;

		if (re_cpf) {
			cpf.value = cpf.value.replace(re_cpf, "$1.$2.$3-$4");
		}else {
			alert("CPF deve ter apenas 11 numeros, sem ponto ou traço");
		}


		if (!re_email.test(email.value)){
			alert("email invalido");
		}
	}

	
</script>





</body>
</html>