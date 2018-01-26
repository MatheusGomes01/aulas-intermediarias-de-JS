<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
//Rest agrupando elementos.

function media(...notas){
	var total = notas.reduce((soma,nota) => soma + nota);
	return total / notas.length;
}
console.log(media(7.3, 7.7, 6.0));
</script>


</body>
</html>
