<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="Viewport" content="width=device-width, inital-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<!-- JQuery -->
<script src="https:code.jquery.com/jquery-3.2.1.js" integrity="
sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<!-- HTML4 -->
<meta http-equiv="Content-Type" content="text/html; chaset=utf-8">
<!-- HTML5 -->
<meta charset="utf-8">
<body background="city.jpg">


<?
$varnome 	  	= $_POST['nome'];
$varsobrenome 	= $_POST['sobrenome'];
$varemail 		= $_POST['email'];
$varidade 		= $_POST['idade'];
$vardate 		= $_POST['date'];
$varestado 		= $_POST['estado'];
$varsexo 		= $_POST['sexo'];
$vardoc 		= $_POST['doc'];
$varrg 			= $_POST['rg'];
$varrg2 		= $_POST['rg2'];
$varcpf 		= $_POST['cpf'];
$varcpf2 		= $_POST['cpf2'];
$varrua 		= $_POST['rua'];
$varnumero 		= $_POST['numero'];
$varbairro 		= $_POST['bairro'];
$varcidade      = $_POST['cidade'];
$varcep 		= $_POST['cep'];

?>

<form method="post" class="form-horizontal" id="cadastro1" name="f1"  
 action="pagina.html">

<div class="navbar navbar-inverse">
    <div class="navbar-inner">

    <a class="brand" href="http://lbca.com.br/">
    <i><font size="40" face="bombing"> LBCA </font></i></a>
    <ul class="nav">

     
      <li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
       <li class="active"><a href="#"><i class="icon-list-alt icon-white">
       </i> Cadastro</a></li>      
       <li><a href="http://lbca.com.br/index.php/quem-somos">
       <i class="icon-book icon-white"></i> Historia </a></li>
      <li><a href="http://lbca.com.br/index.php/fale-conosco/">
      <i class="icon-comment icon-white"></i>Contato</a></li>

      </ul>
      </div>
  </div>


<h3><p align="right"><SPAN ID="Clock">00:00:00</SPAN>

<SCRIPT LANGUAGE="JavaScript">
<!--
  var Elem = document.getElementById("Clock");
  function Horario(){ 
    var Hoje = new Date(); 
    var Horas = Hoje.getHours(); 
    if(Horas < 10){ 
      Horas = "0"+Horas; 
    } 
    var Minutos = Hoje.getMinutes(); 
    if(Minutos < 10){ 
      Minutos = "0"+Minutos; 
    } 
    var Segundos = Hoje.getSeconds(); 
    if(Segundos < 10){ 
      Segundos = "0"+Segundos; 
    } 
    Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
    } 
    window.setInterval("Horario()",1000);
//-->
</SCRIPT>
</h3><br><br>



<!-- DADOS PESSOAIS-->

<legend><p class="btn bnt-mini btn-inverse" title="Por favor confira seus dados a baixo.">
 Dados Pessoais</legend>
 <table  border="0" cellspacing="10">


	<p><tr><td><h5>Nome:</h6></td>
	<td><input class="btn span3" value="<?=$_POST['nome']?>&nbsp;<?=$_POST['sobrenome']
    ?>" id="nome" onkeypress="return Onlychars(event)" disabled/><b onclick="myPencil0()">
    <i class="icon-pencil" 
    title="Para alterar basta clicar aqui, ou onde deseja alterar (depois que estiver
     habilitado)!"></i></button>
	</td>
	</tr></p>

	<p><tr><td><h5>Idade:</td><td><input class="btn btn-mini"  onkeypress="return
     Onlynumbers(event)" id="idade" value="<?=$_POST['idade']?>" size="7" maxlength="7"
      disabled></td></tr></p>

	<p><tr><td><h5>Data:</td><td><input class="btn btn-mini" onkeypress="return
     Onlynumbers(event)"  id="data" value="<?=$_POST['date']?>" size="10" maxlength="10"
      pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"  disabled>
    </td></tr></p>
    
    <p><tr><td><h5>Gênero:</td><td><input class="btn btn-mini" onkeypress="return
     Onlychars(event)"  
     value="<?=$_POST['sexo']?>" id="sexo" size="9" maxlength="9" disabled></section>
     </td></tr></p>
    
    <p><tr><td><h5>RG:</td><td><input class="btn btn-mini"  value="<?=$_POST['rg']?>-<?=$_POST['rg2']?>" id="rg" size="12" maxlength="12" disabled></td></tr></p>   
    
    <p><tr><td><h5>CPF:</td><td><input class="btn btn-mini" 
    onkeypress="return Onlynumbers(event)" 
    value="<?=$_POST['cpf']?>-<?=$_POST['cpf2']?>" id="cpf" size="12" maxlength="12"
    disabled></td></tr></p> 
    
    </table>



<br><br>

<!-- ENDEREÇO -->

     <legend><p type="button" class="btn bnt-mini btn-inverse" title="Por favor confira seus dados a baixo, para mudar o endereço basta mudar o cep e o numero da casa."> Dados de Endereço</legend>
    <table cellspacing="10">



    <p><tr><td><h5>Estado:</td><td>
    <input class="btn btn-mini"  value="<?=$_POST['estado']?>" id="estado" onkeypress="return Onlychars(event)" size="2" maxlength="2" disabled></td></tr></p>

    <p><tr><td><h5>Cidade:</td><td>
    <input class="btn btn-mini"  value="<?=$_POST['cidade']?>"  onkeypress="return Onlychars(event)" id="cidade" disabled></td></tr></p>

    <p><tr><td><h5>CEP:</td><td>
    <input class="btn btn-mini"  pattern="^\w{5}\-\w{3}$" value="<?=$_POST['cep']?>" id="cep"  onkeypress="return Onlynumbers(event)" size="9" maxlength="9" disabled  onblur="pesquisacep(this.value);"/></td></tr></p>

    <p><tr><td><h5>Bairro:</td><td>
    <input class="btn btn-mini"  value="<?=$_POST['bairro']?>" onkeypress="return Onlychars(event)" id="bairro" disabled></td></tr></p>

    <p><tr><td><h5>Rua:</td><td>
    <input class="btn btn-mini"  value="<?=$_POST['rua']?>" id="rua" onkeypress="return Onlychars(event)" disabled></td></tr></p>

    <p><tr><td><h5>Numero:</td><td><input class="btn btn-mini" onkeypress="return Onlynumbers(event)"  value="<?=$_POST['numero']?>" id="nmr" size="6" maxlength="6" disabled></td></tr></p>

    <p><tr><td><h5>E-mail:</td><td>
    <input class="btn btn-mini"  value="<?=$_POST['email']?>" id="email" disabled></p>

    <p><tr><td><h5>Documento:</td><td><input class="btn btn-mini" onkeypress="return Onlychars(event)"  value="<?=$_POST['doc']?>" id="dc" disabled></td></tr></p>
    </table>

    <center><p> <h5> Após ter conffirmado tudo, se tiver feito alguma alteração por favor, clique no icone a seguir <b onclick="myPencil1()"><i class="icon-ok"></i></p> Caso contrario, apenas  imprima e confirme seu cadastro.</b></h5></center>

    <br>
<table>

    <div class="control-group">
        <label class="control-label" for="imprimir">
        <button type="button" class="btn bnt-mini btn-primary" onclick="window.print();"> Imprimir Cadastro </button></label>
        <div class="controls">
        </div>
    </div>


    <div class="control-group">
        <label class="control-label" for="imprimir">
        
        <button type="button"  class="btn bnt-mini btn-primary" onclick="validarCampo1()">Enviar</button></label>
        <div class="controls">
        </div>
    </div>

      
      
        </tr>
        </table>
    </div>

 <script>

     function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
 
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value
                document.getElementById('estado').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    
    function myPencil0(){
    document.getElementById("nome").disabled = false; //habilitado
    document.getElementById("idade").disabled = false; //habilitado
    document.getElementById("data").disabled = false; //habilitado
    document.getElementById("sexo").disabled = false; //habilitado
    document.getElementById("rg").disabled = false; //habilitado
    document.getElementById("cpf").disabled = false; //habilitado
    document.getElementById("estado").disabled = false; //habilitado
    document.getElementById("cidade").disabled = false; //habilitado
    document.getElementById("cep").disabled = false; //habilitado
    document.getElementById("bairro").disabled = false; //habilitado
    document.getElementById("rua").disabled = false; //habilitado
    document.getElementById("nmr").disabled = false; //habilitado
    document.getElementById("email").disabled = false; //habilitado
    document.getElementById("dc").disabled = false; //habilitado



     document.getElementById("nome").focus();
    }

    function myPencil1(){
    document.getElementById("nome").disabled = true; //desabilitado
    document.getElementById("idade").disabled = true; //desabilitado
    document.getElementById("data").disabled = true; //desabilitado
    document.getElementById("sexo").disabled = true; //desabilitado
    document.getElementById("rg").disabled = true; //desabilitado
    document.getElementById("cpf").disabled = true; //desabilitado
    document.getElementById("estado").disabled = true; //desabilitado
    document.getElementById("cidade").disabled = true; //desabilitado
    document.getElementById("cep").disabled = true; //desabilitado
    document.getElementById("bairro").disabled = true; //desabilitado
    document.getElementById("rua").disabled = true; //desabilitado
    document.getElementById("nmr").disabled = true; //desabilitado
    document.getElementById("email").disabled = true; //desabilitado
    document.getElementById("dc").disabled = true; //desabilitado
 
      document.getElementById("enviar").focus();
  }
  </script>

  <script>

   

     function validarCampo1(){ 
if(document.getElementById("nome").value==""){
        document.getElementById("nome").focus(); 
        alert("O Campo nome é obrigatório!");
        return false;
        }   
if(document.getElementById("idade").value==""){
        document.getElementById("idade").focus(); 
        alert("O Campo Idade é obrigatório!");
        return false;
        } 
if(document.getElementById("data").value==""){
        document.getElementById("data").focus(); 
        alert("O Campo data é obrigatório!");
        return false;
        }
if(document.getElementById("sexo").value==""){
        document.getElementById("sexo").focus(); 
        alert("O Campo gênero é obrigatório!");
        return false;
        }
if(document.getElementById("rg").value==""){
        document.getElementById("rg").focus(); 
        alert("O Campo rg é obrigatório!");
        return false;
        }      
if(document.getElementById("cpf").value==""){
        document.getElementById("nome").focus(); 
        alert("O Campo cpf é obrigatório!");
        return false;
        }                             
if(document.getElementById("estado").value==""){
        document.getElementById("estado").focus(); 
        alert("O Campo estado é obrigatório!");
        return false;
        } 
if(document.getElementById("cidade").value==""){
        document.getElementById("cidade").focus(); 
        return false;
        alert("O Campo cidade é obrigatório!");
        }
if(document.getElementById("cep").value==""){
        document.getElementById("cep").focus(); 
        alert("O Campo cep é obrigatório!");
        return false;
        }
if(document.getElementById("bairro").value==""){
        document.getElementById("bairo").focus(); 
        alert("O Campo bairo é obrigatório!");
        return false;
        } 
if(document.getElementById("rua").value==""){
        document.getElementById("nome").focus(); 
        alert("O Campo nome é obrigatório!");
        return false;
        } 
if(document.getElementById("nmr").value==""){
        document.getElementById("nmr").focus(); 
        alert("O Campo numero é obrigatório!");
        return false;
        }
if(document.getElementById("email").value==""){
        document.getElementById("email").focus(); 
        alert("O Campo email é obrigatório!");
        return false;
        }              
if(document.getElementById("dc").value==""){
        document.getElementById("dc").focus(); 
        alert("O Campo Documento é obrigatório!");
        return false;
        }                                         
        document.getElementById("cadastro1").submit();
        }

  </script>


<script>
        function Onlychars(e)
{
    var tecla=new Number();
    if(window.event) {
        tecla = e.keyCode;
    }
    else if(e.which) {
        tecla = e.which;
    }
    else {
        return true;
    }
    if((tecla >= "48") && (tecla <= "57")){
        return false;
    }
}


function Onlynumbers(e)
{
    var tecla=new Number();
    if(window.event) {
        tecla = e.keyCode;
    }
    else if(e.which) {
        tecla = e.which;
    }
    else {
        return true;
    }
    if((tecla >= "97") && (tecla <= "122")){
        return false;
    }
}
</script>


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




</body>
</html>