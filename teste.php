<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script>
function click(callback = function() {}){
	callback();
}

click(); //ok
click(undefined); //ok
click(null);
 
</script>


</body>
</html>
