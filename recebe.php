<?
if($_POST){
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$fotografia = $_FILES['fotografia'];

	if(move_uploaded_file($fotografia['tmp_name'],$fotografia['name'])){
		echo $nome.' '.$idade;
	}else
	echo 'Erro no processo';

}
?>