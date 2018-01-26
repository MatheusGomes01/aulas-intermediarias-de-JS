<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
function defVal(){
	return 2;
}

function soma(a = defVal() + 1, b = defVal()){
	return a + b;
}

console.log(soma(), soma(2, 3), soma (0));
 
</script>


</body>
</html>
