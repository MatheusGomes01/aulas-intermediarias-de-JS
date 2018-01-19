<!DOCTYPE html>
<html>
<head>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this you use the htaccess-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome">


	<title>Index</title>
	<meta name="description" content="">
	<meta name="author" content="Paulo">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<!-- Replace favicon ico & apple-touch-icon.png in the root domain and delete-->
	<link rel="shortcut" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>
<body>
	<input type="file" name="fotografia">
<script src="script.js" type="text/javascript">
document.getElementById("fotografia").onchange = function(e){
	if(e.target.files != null && e.target.files.length != 0){
		var arquivo = e.target.files[0];
		var fd = new FormData();
		fd.append("fotografia",arquivo);
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState===4&xmlhttp.status===200)
				alert(xmlhttp.responseText);
		};

		xmlhttp.open("POST","recebe.php",true);
		xmlhttp.send(fd);
	}
};
</script>
</body>
</html>