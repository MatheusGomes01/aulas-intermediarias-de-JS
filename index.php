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
<body>


    <div class="navbar navbar-inverse">
        <div class="navbar-inner">

        <a class="brand" href="http://lbca.com.br/"><i><font size="40" face="bombing"> LBCA </font></i></a>
        <ul class="nav">

        <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
        <li><a href="http://lbca.com.br/index.php/quem-somos"><i class="icon-book icon-white"></i> Historia </a></li>
         <li><a href="http://lbca.com.br/index.php/fale-conosco/"><i class="icon-comment icon-white"></i>Contato</a></li>

        </ul>
        </div>
    </div>


    <center>

        <div class="control-group">
        <label class="control-label" for="inputEmail">Prezado, para que possamos ajuda - lo, preencha os campos a seguir com seu dados. (eles aparecerão conforme forem preenchidos)</label>

        <div class="control-group">
        <label class="control-label" for="inputEmail">Obrigado.</label>



          


      <p align="right"><button  class="btn btn-large btn-inverse disabled"><SCRIPT LANGUAGE="JAVASCRIPT">
<!--

var now = new Date();
var mName = now.getMonth() +1 ;
var dName = now.getDay() +1;
var dayNr = now.getDate();
var yearNr=now.getYear();
if(dName==1) {Day = "Domingo";}
if(dName==2) {Day = "Segunda-feira";}
if(dName==3) {Day = "Terça-feira";}
if(dName==4) {Day = "Quarta-feira";}
if(dName==5) {Day = "Quinta-feira";}
if(dName==6) {Day = "Sexta-feira";}
if(dName==7) {Day = "Sábado";}
if(mName==1){Month = "01";}
if(mName==2){Month = "02";}
if(mName==3){Month = "03";}
if(mName==4){Month = "04";}
if(mName==5){Month = "05";}
if(mName==6){Month = "06";}
if(mName==7){Month = "07";}
if(mName==8){Month = "08";}
if(mName==9){Month = "09";}
if(mName==10){Month = "10";}
if(mName==11){Month = "11";}
if(mName==12){Month = "12";}
if(yearNr < 2000) {Year = 1900 + yearNr;}
else {Year = yearNr;}
var todaysDate =(" " + Day + ", " + dayNr + "/" + Month + "/" + Year);

document.write('  '+todaysDate);

//-->
</SCRIPT>

  
<SPAN ID="Clock">00:00:00</SPAN>

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
</button><br><br>


    </center>




 <form method="post" class="form-horizontal" id="cadastro" name="f1"  
 action="cfmdados.php">



    <!-- DADOS PESSOAIS-->
    <fieldset>
        <legend><button type="button" class="btn bnt-mini btn-primary" onclick="myFunction()" title="Esses botões servem para minimizar ou maximizar campos">Dados Pessoais</button></legend>

        <div id="myDIV">

            <table  cellspacing="10">
            <tr>
  

            <div class="control-group">
            <label class="control-label" for="nome">Nome:</label>
            <div class="controls">
    
            <input type="text" id="nome" name="nome" onkeypress="return Onlychars(event)"  
            pattern="[A-z\s]+$" placeholder="Nome" required >
            </div>
        </div>



        <div class="control-group" id="sobrenome1">
            <label class="control-label" for="sobrenome" >Sobreome:</label>
            <div class="controls">

            <input type="text" id="sobrenome" name="sobrenome" onkeypress="return Onlychars(event)"  pattern="[A-z\s]+$" placeholder="Sobrenome" required/>
            </div>
        </div>

        <div class="control-group" id="genero1">
            <label class="control-label" for="sexo">Sexo:</label>
            <div class="controls">
    
            <label class="radio">
            <input type="radio" name="sexo" id="sexo" value="Maculino">
            Masculino
            </label>
            <label class="radio">
            <input type="radio" name="sexo" id="sexo" value="Feminino">
            Feminino
            </label>
            </div>
        </div>


        <div class="control-group" id="faixa1">
            <label class="control-label" for="faixa">Faixa de Idade:</label>
            <div class="controls">
   
            <select name="idade" id="faixa">
            <option value="">Selecione</option>
            <option value="14 a 16">14 a 16 anos</option>
            <option value="17 a 21">17 a 21 anos</option>
            <option value="21 pra cima">21 ou mais</option>
            </select>

            </div>
        </div>


        <div class="control-group" id="data1">
            <label class="control-label" for="data">Data de Nascimento:</label>
            <div class="controls">
            <input type="date" required="required" maxlength="10" name="date" id="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="01/01/1920" max="31/12/2017" />
            </div>
        </div>

        <div class="control-group" id="rg1">
            <label class="control-label" for="rg">RG:</label>
            <div class="controls">
            <input type="text" id="rg" name="rg" class="input-small" size="8" onkeypress="return Onlynumbers(event)" maxlength="8" placeholder="RG"> -  <input type="text" class="input-mini" id="rg2" name="rg2" size="2" maxlength="2" placeholder="digito"  required />
            </div>
            </div>
        </div>


        <div class="control-group" id="cpf1">
            <label class="control-label" for="cpf">CPF:</label>
            <div class="controls">
            <input type="text" class="input-small" id="cpf" name="cpf" size="9" maxlength="9" placeholder="CPF" onkeypress="return Onlynumbers(event)"> -  <input type="text" class="input-mini" id="cpf2" name="cpf2" size="2" maxlength="2" placeholder="digito" onkeypress="return Onlynumbers(event)" required />
            </div>
        </div>
            </tr>
            </table>
        </div>

        <script>
            function myFunction() {
            var x = document.getElementById('myDIV');
            if (x.style.display === 'none') {
            x.style.display = 'block';
            } else {
         x.style.display = 'none';
            }
            }
        </script>

    </fieldset>



    <!-- ENDEREÇO -->
    <fieldset id="dados2">
            <legend><button type="button" class="btn bnt-mini btn-primary" onclick="myEndereco()">
            Dados de Endereço</button></legend>


        <div id="myDI">
             <table cellspacing="10">


             <tr>


            


            <div class="control-group" id="cep1">
                <label class="control-label" for="cep">CEP:</label>
                <div class="controls">
                <input type="text" class="input-small"  onkeypress="return Onlynumbers(event)" id="cep" name="cep" size="9" maxlength="9" placeholder="CEP"  onblur="pesquisacep(this.value);"/> 
                </div>
            </div>

            <div class="control-group" id="estado1">
                <label class="control-label" for="estado">Estado:</label>
                <div class="controls">

                <select  id="estado" name="estado"> 
                <option value="">Selecione</option>
                <option value="AC">Acre</option> 
                <option value="AL">Alagoas</option> 
                <option value="AM">Amazonas</option> 
                <option value="AP">Amapá</option> 
                <option value="BA">Bahia</option> 
                <option value="CE">Ceará</option> 
                <option value="DF">Distrito Federal</option> 
                <option value="ES">Espírito Santo</option> 
                <option value="GO">Goiás</option> 
                <option value="MA">Maranhão</option> 
                <option value="MT">Mato Grosso</option> 
                <option value="MS">Mato Grosso do Sul</option> 
                <option value="MG">Minas Gerais</option> 
                <option value="PA">Pará</option> 
                <option value="PB">Paraíba</option> 
                <option value="PR">Paraná</option> 
                <option value="PE">Pernambuco</option> 
                <option value="PI">Piauí</option> 
                <option value="RJ">Rio de Janeiro</option> 
                <option value="RN">Rio Grande do Norte</option> 
                <option value="RO">Rondônia</option> 
                <option value="RS">Rio Grande do Sul</option> 
                <option value="RR">Roraima</option> 
                <option value="SC">Santa Catarina</option> 
                <option value="SE">Sergipe</option> 
                <option value="SP">São Paulo</option> 
                <option value="TO">Tocantins</option> 
                </select>
                </div>
            </div>



            <div class="control-group" id="city">
                <label class="control-label" for="cidade">Cidade:</label>
                <div class="controls">
                <input type="text" id="cidade" name="cidade"  onkeypress="return Onlychars(event)" placeholder="Cidade">
                </div>
            </div>

            <div class="control-group" id="bairro1">
                <label class="control-label" for="bairro">Bairro:</label>
                <div class="controls">
                <input type="text" id="bairro" name="bairro" onkeypress="return Onlychars(event)" placeholder="Bairro">
                </div>
            </div>

            <div class="control-group" id="rua1">
                <label class="control-label" for="rua">Rua:</label>
                <div class="controls">
                <input type="text" id="rua" name="rua" onkeypress="return Onlychars(event)" placeholder="Rua">
                </div>
            </div>

            <div class="control-group" id="numero1">
                <label class="control-label" for="numero">Numero:</label>
                <div class="controls">
                <input type="text" class="input-mini" onkeypress="return Onlynumbers(event)" id="numero" name="numero" placeholder="Numero">
                </div>
             </div>

            </tr>
            </table>
        </div>


        <script>

     
        function myEndereco() {
        var x = document.getElementById('myDI');
        if (x.style.display === 'none') {
        x.style.display = 'block';
        } else {
        x.style.display = 'none';
        }
        }

        </script>

    </fieldset>



    <!-- DADOS DE LOGIN -->
    <fieldset id="dados3">
        <legend><button type="button" class="btn bnt-mini btn-primary" onclick="myLogin();">Dados de Login</button></legend>


        <div id="myD">
        <table cellspacing="10">
   
        <tr id="email1">


        <div class="control-group" id="email1">
            <label class="control-label" for="inputIcon">Email:</label>
            <div class="controls">
            <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span>
            <input type="email" id="email" name="email" placeholder="Email" onblur="myEmail(f1.email)">
            <div id="msgemail"></div>
            </div>
            </div>
        </div>


        <script language="Javascript">
function myEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="E-mail válido";
alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
alert("E-mail invalido");
}
}
</script>


        <div class="control-group" id="login1">
            <label class="control-label" for="login">Login:</label>
            <div class="controls">
            <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span> 
            <input type="text" id="login" placeholder="Login">
            </div>
            </div>
        </div>



        <div class="control-group" id="senha1">
            <label class="control-label" for="senha">Senha:</label>
            <div class="controls">
            <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span> 
            <input type="password" id="senha" size="14" maxlength="14" placeholder="Senha">
            </div>
            </div>
        </div>

        <div class="control-group" id="confirmar1">
            <label class="control-label" for="Password"> Confirmar Senha:</label>
            <div class="controls">
            <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span> 
            <input type="password" id="confirmar" size="14" maxlength="14" placeholder="Senha">
            </div>
            </div>
        </div>

        <div class="control-group" id="dc1">
            <label class="control-label" for="dc">Documento entregue para cadastro:</label>
            <div class="controls">
 
            <label class="radio">
            <input type="radio" name="doc" id="doc" value="Registro Geral (RG)">
            Registro Geral (RG)
            </label>
            <label class="radio">
            <input type="radio" name="doc" id="doc" value="Passaporte">
            Passaporte
            </label>
            <label class="radio">
            <input type="radio" name="doc" id="doc" value="carteira de trabalho">
            Carteira de trabalho
            </label>
            </div>
        </div>

    <div class="control-group">
        <div class="controls">
        <label class="checkbox">
        <input type="checkbox"> Lembre de mim
        </label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="imprimir">
        <button type="button" class="btn bnt-mini btn-primary" onclick="window.print();"> Imprimir Cadastro </button></label>
        <div class="controls">
        </div>
    </div>


    <div class="control-group">
        <label class="control-label" for="imprimir">
        
        <button type="button"  class="btn bnt-mini btn-primary" onclick="validarCampo()">Rever e Confirmar</button></label>
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


        function myLogin() {
        var x = document.getElementById('myD');
        if (x.style.display === 'none') {
        x.style.display = 'block';
        } else {
        x.style.display = 'none';
        }
        }

        $(document).ready(function(){
        $('#sobrenome1').hide();
        $('#genero1').hide();
        $('#faixa1').hide();
        $('#data1').hide();
        $('#rg1').hide();
        $('#cpf1').hide();

        $('#estado1').hide();
        $('#city').hide();
        $('#cep1').hide();
        $('#bairro1').hide();
        $('#rua1').hide();
        $('#numero1').hide();

  
        $('#login1').hide();
        $('#senha1').hide();
        $('#confirmar1').hide();
        $('#dc1').hide();

 

        $('#dados2').hide();
        $('#dados3').hide();


        $("#nome").change(function(){
    
        if  ($("#nome").val() == ""){
        $('#sobrenome1').hide();

        }else {
        $('#sobrenome1').show();
        document.getElementById("sobrenome").focus();
        } 
        });

        $("#sobrenome1").change(function(){
    
        if  ($("#sobrenome").val() == ""){
        $('#genero1').hide();

        }else {
        $('#genero1').show();
        }
        });




        $("#genero1").change(function(){
    
        if  ($("#sexo").val() == ""){
        $('#faixa1').hide();

        }else {
        $('#faixa1').show();
        }
        });


        $("#faixa1").change(function(){
    
        if  ($("#faixa").val() == ""){
        $('#data1').hide();

        }else {
        $('#data1').show();
        }
        });


        $("#data1").change(function(){
    
        if  ($("#ano").val() == ""){
        $('#rg1').hide();

        }else {
        $('#rg1').show();
        document.getElementById("rg").focus();
        }
        });


        $("#rg1").change(function(){
    
        if  ($("#rg2").val() == ""){
        $('#cpf1').hide();

        }else {
        $('#cpf1').show();
        document.getElementById("cpf").focus();
        }
        });


        $("#cpf1").change(function(){
    
        if  ($("#cpf2").val() == ""){
        $('#dados2').hide();

        }else {
        $('#dados2').show();
        $('#cep1').show();
        }
        });




        $("#cep1").change(function(){
    
        if  ($("#cep").val() == ""){
        $('#estado1').hide();
        }else {
        $('#estado1').show();
        }
        });
  
        $("#cep1").change(function(){

        if ($("#cep").val() == ""){
      
        $('#city').hide();
        }else {
        $('#city').show();
        }
        });

   

        $("#cep1").change(function(){

        if ($("#cep").val() == ""){
        $('#bairro1').hide();
        }else {
        $('#bairro1').show();
        }
        });


        $("#cep1").change(function(){

        if ($("#cep").val() == ""){
        $('#rua1').hide();
        }else {
        $('#rua1').show();
        }
        });

        $("#cep1").change(function(){

        if ($("#cep").val() == ""){
        $('#numero1').hide();
        }else {
        $('#numero1').show();
        }
        });
      



        $("#numero1").change(function(){

        if ($("#numero").val() == ""){
        $('#dados3').hide();
        }else {
        $('#dados3').show();
        document.getElementById("email").focus();
        }
        });

        $("#email1").change(function(){

        if ($("#email").val() == ""){
        $('#login1').hide();
        }else {
        $('#login1').show();
        document.getElementById("login").focus();
        }
        });

        $("#login1").change(function(){

        if ($("#login").val() == ""){
        $('#senha1').hide();
        }else {
        $('#senha1').show();
        document.getElementById("senha").focus();
        }
        });

        $("#senha1").change(function(){

        if ($("#senha").val() == ""){
        $('#confirmar1').hide();
        }else {
        $('#confirmar1').show();
        document.getElementById("confirmar").focus();
        }
        });

        $("#confirmar1").change(function(){

        if ($("#confirmar").val() == ""){
        $('#dc1').hide();
        }else {
        $('#dc1').show();
        document.getElementById("dc").focus();
        }
        });
        })
    </script>

    </fieldset>


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

    <script>
        function validarCampo(){        
     if ($("#senha").val() != $("#confirmar").val()){
      alert ("As senhas são diferentes")
      return;
     }
        if(document.getElementById("nome").value=="")
        {
        document.getElementById("nome").focus(); 
        alert("O Campo nome é obrigatório!");
        return false;
        }
        if(document.getElementById("sobrenome").value=="")
        {
        document.getElementById("sobrenome").focus();
        alert("O Campo sobrenome é obrigatório!");
        return false;
        }
        if(document.getElementById("email").value=="")
        {
        document.getElementById("email").focus();
        alert("O Campo email é obrigatório!");
        return false;
        }
        if(document.getElementById("date").value=="")
        {
        document.getElementById("date").focus();
        alert("O Campo dia é obrigatório!");
        return false;
        }
        if(document.getElementById("senha").value=="")
        {
        document.getElementById("senha").focus();
        alert("O Campo senha é obrigatório!");
        return false;
        }
        if(document.getElementById("confirmar").value=="")
        {
        document.getElementById("confirmar").focus();
        alert("O Campo Confirmar Senha  é obrigatório!");
        return false;
        }
        if(document.getElementById("sexo").value=="")
        {
        document.getElementById("sexo").focus();
        alert("O Campo Sexo  é obrigatório!");
        return false;
        }
        if(document.getElementById("rg").value=="")
        {
        document.getElementById("rg").focus();
        alert("O Campo RG é obrigatório!");
        return false;
        }
        if(document.getElementById("cpf").value=="")
        {
        document.getElementById("cpf").focus();
        alert("O Campo CPF  é obrigatório!");
        return false;
        }
        if(document.getElementById("rua").value=="")
        {
        document.getElementById("rua").focus();
        alert("O Campo Rua  é obrigatório!");
        return false;
        }
        if(document.getElementById("numero").value=="")
        {
        document.getElementById("numero").focus();
        alert("O Campo Numero é obrigatório!");
        return false;
        }
        if(document.getElementById("bairro").value=="")
        {
        document.getElementById("bairro").focus();
        alert("O Campo Bairro é obrigatório!");
        return false;
        }
        if(document.getElementById("cidade").value=="")
        {
        document.getElementById("cidade").focus();
        alert("O Campo Cidade é obrigatório!");
        return false;
        }
        if(document.getElementById("cep").value=="")
        {
        document.getElementById("cep").focus();
        alert("O Campo CEP é obrigatório!");
        return false;
        }
        if(document.getElementById("login").value=="")
        {
        document.getElementById("login").focus();
        alert("O Campo Login  é obrigatório!");
        return false;
        }
        if(document.getElementById("doc").value=="")
        {
        document.getElementById("doc").focus();
        alert("O Campo Documento  é obrigatório!");
        return false;
        }
        document.getElementById("cadastro").submit();
        }
    </script>
    <br />
    </div> 
    </form>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>

