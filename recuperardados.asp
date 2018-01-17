<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>

  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<!-- HTML 4 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- HTML5 -->
<meta charset="utf-8"/>
<body background="city.jpg">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<%
varnome=Request.form("nome")
varsobrenome=Request.form("sobrenome")
varemail=Request.form("email")
varidade=Request.form("idade")
vardate=Request.form("date")
varestado=Request.form("estado")
varsexo=Request.form("sexo")
vardoc=Request.form("doc")
varrg=Request.form("rg")
varrg2=Request.form("rg2")
varcpf=Request.form("cpf")
varcpf2=Request.form("cpf2")
varrua=Request.form("rua")
varnumero=Request.form("numero")
varbairro=Request.form("bairro")
varcidade=Request.form("cidade")
varcep=Request.form("cep")
varcep2=Request.form("cep2")
varlogin=Request.form("login")
%>


    <div class="navbar navbar-inverse">
    <div class="navbar-inner">

    <a class="brand" href="http://lbca.com.br/"><i><font size="40" face="bombing"> LBCA </font></i></a>
    <ul class="nav">

     
      <li><a href="file.html"><i class="icon-home icon-white"></i> Home</a></li>
       <li class="active"><a href="#"><i class="icon-list-alt icon-white"></i> Cadastro</a></li>      <li><a href="http://lbca.com.br/index.php/quem-somos"><i class="icon-book icon-white"></i> Historia </a></li>
      <li><a href="http://lbca.com.br/index.php/fale-conosco/"><i class="icon-comment icon-white"></i>Contato</a></li>

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


 <legend><p class="btn bnt-mini btn-inverse" title="Por favor confira seus dados a baixo."> Dados Pessoais</legend>
 <table  border="0" cellspacing="10">

 
 
<p><tr><td><h5>Nome:</h6></td><td><input class="btn span3" value="<%=varnome%>&nbsp;<%=varsobrenome%>" id="nome" onkeypress="return Onlychars(event)" disabled><b onclick="myPencil0()"><i class="icon-pencil" title="Para alterar basta clicar aqui, ou onde deseja alterar (depois que estiver habilitado)!"></i></button></td>
	</tr></p>

 
	
	
<p><tr><td><h5>Idade:</td><td><input class="btn btn-mini"  onkeypress="return Onlynumbers(event)" id="idade" value="<%=varidade%>" size="7" maxlength="7" disabled></td></tr></p>


<p><tr><td><h5>Data:</td><td><input class="btn btn-mini" onkeypress="return Onlynumbers(event)"  id="data" value="<%=vardate%>" size="10" maxlength="10" disabled>
</td></tr></p>

<p><tr><td><h5>Gênero:</td><td><input class="btn btn-mini" onkeypress="return Onlychars(event)"  value="<%=varsexo%>" id="sexo" size="9" maxlength="9" disabled></section></td></tr></p>

<p><tr><td><h5>RG:</td><td><input class="btn btn-mini"  value="<%=varrg%>-<%=varrg2%>" id="rg" size="12" maxlength="12" disabled></td></tr></p>

<p><tr><td><h5>CPF:</td><td><input class="btn btn-mini" onkeypress="return Onlynumbers(event)" value="<%=varcpf%>-<%=varcpf2%>" id="cpf" size="12" maxlength="12" disabled></td></tr></p>

</table>



<br><br>

<!-- ENDEREÇO -->

 <legend><p type="button" class="btn bnt-mini btn-inverse" title="Por favor confira seus dados a baixo, para mudar o endereço basta mudar o cep e o numero da casa."> Dados de Endereço</legend>
 <table cellspacing="10">



<p><tr><td><h5>Estado:</td><td>
<input class="btn btn-mini"  value="<%=varestado%>" id="estado" onkeypress="return Onlychars(event)" size="2" maxlength="2" disabled></td></tr></p>

<p><tr><td><h5>Cidade:</td><td>
<input class="btn btn-mini"  value="<%=varcidade%>"  onkeypress="return Onlychars(event)" id="cidade" disabled></td></tr></p>

<p><tr><td><h5>CEP:</td><td>
<input class="btn btn-mini"  value="<%=varcep%>" id="cep"  onkeypress="return Onlynumbers(event)" size="9" maxlength="9" disabled  onblur="pesquisacep(this.value);"/></td></tr></p>

<p><tr><td><h5>Bairro:</td><td>
<input class="btn btn-mini"  value="<%=varbairro%>" onkeypress="return Onlychars(event)" id="bairro" disabled></td></tr></p>

<p><tr><td><h5>Rua:</td><td>
<input class="btn btn-mini"  value="<%=varrua%>" id="rua" onkeypress="return Onlychars(event)" disabled></td></tr></p>

<p><tr><td><h5>Numero:</td><td><input class="btn btn-mini" onkeypress="return Onlynumbers(event)"  value="<%=varnumero%>" id="nmr" size="6" maxlength="6" disabled></td></tr></p>

<p><tr><td><h5>E-mail:</td><td>
<input class="btn btn-mini"  value="<%=varemail%>" id="email" disabled></p>

<p><tr><td><h5>Documento:</td><td><input class="btn btn-mini" onkeypress="return Onlychars(event)"  value="<%=vardoc%>" id="dc" disabled></td></tr></p>
</table>

<center><p> <h5> Após ter conffirmado tudo, se tiver feito alguma alteração por favor, clique no icone a seguir <b onclick="myPencil1()"><i class="icon-ok"></i></p> Caso contrario, apenas  imprima e confirme seu cadastro.</b></h5></center>

<br>
<table>

<tr>
	<td>
<p onclick="window.print();"><input type="submit" class="btn bnt-mini btn-primary" id="ip" value="imprimir cadastro"></a>
</td></tr>



<tr>
	<td>
<a href="pagina.html"> <input type="submit"  class="btn bnt-mini btn-primary" value="Enviar"></a>
</td></tr>

</table>

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
    

      document.getElementById("ip").focus();

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

