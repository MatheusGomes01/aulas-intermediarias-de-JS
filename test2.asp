<!DOCTYPE html>
<html lang="en">
  <head>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

  <body background="city.jpg">
  <body>



    <form method="post" class="pure-form" id="cadastro" name="f1"  action="recuperardados.asp">
    
   <center>
  <fieldset>

  <p><i><b>Prezado, para que possamos ajuda - lo, preencha os campos a seguir com seu dados.</b></i></p>
<b>Obrigado.</b>

</fieldset>
</center>


<table>
  <tr>
    <td width=20%>
<p align="right"><a href="http://lbca.com.br/"><img src="logo.png" id="imagem" width="300" heigth="200" title="link para o site com todas as informações"></p>
</a>
</td>
</tr>
</table>

 <!-- DADOS PESSOAIS-->
<fieldset>
 <legend><button type="button" class="btn btn-primary" onclick="myFunction()" title="Esses botões servem para minimizar ou maximizar campos">Dados Pessoais</button></legend>

 <div id="myDIV">
  <table  cellspacing="10">
   


 <tr>
<td>Nome:</td><td><input type="text" divclass="col-md-1" id="nome" name="nome"  placeholder="Digite aqui " required /></td></tr>

<tr id="sobrenome1">
  <td> Sobrenome:</td><td> <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required /><br/><br>
    </td>
    </tr>

    
    <tr id="genero1">
    <td>Gênero: </td><td><type name="sexo" id="genero" required />
    <input type="radio" id="sexo"  name="sexo" value="Mascullino"> Masculino
    <input type="radio" id="sexo"  name="sexo" value="Feminino"> Feminino </td></tr>
    
    <tr id="faixa1">
    <td>Faixa de idade: </td><td><select name="idade" id="faixa" type="text" required />
    <option value="selecione">Selecione </option> 
    <option value="14 a 16"> 14 a 16 anos </option>
    <option value="17 a 21"> 17 a 21 anos </option>
    <option value="21 pra cima"> 21 anos pra cima </select>
    </td>
    </tr>
    
    
    
    <tr id="data1">
        <td>Data de nascimento: </td><td><type id="data" name="data" required />
   <input type="text" id="dia" name="dia" size="2" maxlength="2" placeholder="dd"> 
   <input type="text" id="mes" name="mes" size="2" maxlength="2" placeholder="mm"> 
   <input type="text" id="ano" name="ano" size="4" maxlength="4" placeholder="aaaa">
   </td>
 </tr>
   
   <tr id="rg1">
   <td>RG: </td><td><input type="text" id="rg" name="rg" size="13" maxlength="13" placeholder="RG" required />
   </td>
 </tr>
   
   <tr id="cpf1">
   <td>
   CPF:</td><td><input type="text" id="cpf" name="cpf" size="9" maxlength="9" placeholder="CPF" required /> - 
    <input type="text" id="cpf2" name="cpf2" size="2" maxlength="2" placeholder="digito" required />
   </td>
   </tr>
   </table>
</fieldset>
<br />

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

<!-- ENDEREÇO -->
<fieldset id="dados2">
 <legend><button type="button" class="btn btn-primary" onclick="myEndereco()">Dados de Endereço</button></legend>


<div id="myDI">
  <table cellspacing="10">


  <tr>
   <td>
   
   Estado:</td><td>
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
   </td>
  </tr>

  <tr id="city">
  <td> 
  Cidade:</td><td>
   <input type="text" id="cidade"  name="cidade" placeholder="Cidade" required />
   </td>
  </tr>


  <tr id="cep1">
   <td>
   CEP:</td><td><input type="text" id="cep" name="cep" size="5" maxlength="5" placeholder="CEP" required /> - <input type="text" id="cep2" name="cep2" size="3" maxlength="3" placeholder="digito" required />
   </td>
  </tr>


  <tr id="bairro1">
   <td>
   Bairro:</td><td><input type="text" id="bairro" name="bairro" placeholder="Bairro" required />
   </td>
  </tr>
  
   
 <tr id="rua1">
   <td>
   Rua:</td><td><input type="text" id="rua" name="rua" placeholder="Rua" required />
   </td>
 </tr>
   
   <tr id="numero1">   
   <td>
   Numero:</td><td><input type="text" id="numero" name="numero" size="4" placeholder="Numero" required />
   </td>
  </tr>
  
  
 
     </table>
</fieldset>
<br />

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



<!-- DADOS DE LOGIN -->
<fieldset id="dados3">
 <legend><button type="button" class="btn btn-primary" onclick="myLogin();">Dados de Login</button></legend>


<div id="myD">
  <table cellspacing="10">
   
<tr id="email1">
   <td>
   Seu e-mail: </td><td><input type="text" id="email" name="email" placeholder="E-mail" required /> 
  </td>
</tr>


  <tr id="login1">
   <td>
   Login de usuário:</td><td><input type="text" id="login" name="login" placeholder="Login" required />
   </td>
  </tr>
  
  
  <tr id="senha1">
   <td>
      Senha:</td><td><input type="password" id="senha" name="senha" maxlength="12" placeholder="Senha"  required /> 
</td>
  </tr>
  
  
  <tr id="confirmar1">
   <td>
     Corfimar Senha:</td><td><input type="password" id="confirmar" name="confirmar" maxlength="12" placeholder="Confirmar senha" required /> 



    </td>
  </tr>
  
  
  <tr id="dc1">
   <td>Documento entregue para cadastro:</td><td>
  <input type="radio" id="doc" name="doc" value="Registro Geral (RG)"> Registro Geral (RG) 
  <input type="radio" id="doc" name="doc" value="Passaporte"> Passaporte 
  <input type="radio" id="doc" name="doc" value="Carteira de trabalho"> Carteira de trabalho
  </tr>

  <tr>
  <td>
<button type="button" class="btn btn-primary" onclick="window.print();">Imprimir</button>
</td> </tr>



<tr>
<td>
<button type="button" class="btn btn-primary" onclick="validarCampo()">Rever e confirmar</button> 
</td>
</tr>



   </table>
</fieldset>
<br />

</div>
<script>
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
   }
   });


    $("#rg1").change(function(){
    
   if  ($("#rg").val() == ""){
    $('#cpf1').hide();

   }else {
   $('#cpf1').show();
   }
   });


   $("#cpf1").change(function(){
    
   if  ($("#cpf2").val() == ""){
    $('#dados2').hide();

   }else {
   $('#dados2').show();
   }
   });


  $("#estado").change(function(){
    
   if  ($("#estado").val() == ""){
    $('#city').hide();

   }else {
   $('#city').show();
   }
   });
  
  $("#city").change(function(){

      if ($("#cidade").val() == ""){
      
      $('#cep1').hide();
      }else {
      $('#cep1').show();
    }
  });

   

  $("#cep1").change(function(){

    if ($("#cep2").val() == ""){
    $('#bairro1').hide();
   }else {
    $('#bairro1').show();
   }
   });


  $("#bairro1").change(function(){

      if ($("#bairro").val() == ""){
      $('#rua1').hide();
      }else {
      $('#rua1').show();
      }
      });

  $("#rua1").change(function(){

      if ($("#rua").val() == ""){
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
      }
      });
      



$("#numero1").change(function(){

      if ($("#numero").val() == ""){
      $('#dados3').hide();
      }else {
      $('#dados3').show();
      }
      });

$("#email1").change(function(){

      if ($("#email").val() == ""){
      $('#login1').hide();
      }else {
      $('#login1').show();
      }
      });

$("#login1").change(function(){

      if ($("#login").val() == ""){
      $('#senha1').hide();
      }else {
      $('#senha1').show();
      }
      });

$("#senha1").change(function(){

      if ($("#senha").val() == ""){
      $('#confirmar1').hide();
      }else {
      $('#confirmar1').show();
      }
      });

$("#confirmar1").change(function(){

      if ($("#confirmar").val() == ""){
      $('#dc1').hide();
      }else {
      $('#dc1').show();
      }
      });


})

  function validarCampo(){ 
     if ($("#senha").val() != $("#confirmar").val()){
      alert ("As senhas são diferentes")
           document.getElementById("senha").focus();

           

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
if(document.getElementById("dia").value=="")
{
document.getElementById("dia").focus();
alert("O Campo dia é obrigatório!");
return false;
}
if(document.getElementById("mes").value=="")
{
document.getElementById("mes").focus();
alert("O Campo mes é obrigatório!");
return false;
}
if(document.getElementById("ano").value=="")
{
  document.getElementById("ano").focus();
alert("O Campo ano é obrigatório!");
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

        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




</form>
</body>
</html>


PHP

//Validação de email utilizando expressões regulares e jQuery
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("#form1").submit(function(){
      var email = $("#email").val();
      if(email != "")
      {
         var filtro = /^([w-]+(?:.[w-]+)*)@((?:[w-]+.)*w[w-]{0,66}).([a-z]{2,6}(?:.[a-z]{2})?)$/i;
         if(filtro.test(email))
         {
     alert("Este endereço de email é válido!");
     return true;
         } else {
           alert("Este endereço de email não é válido!");
           return false;
         }
      } else {
   alert('Digite um email!'); return false;
      }
   });
});
</script>
<form id="form1" action="#">
   Email: <input id="email" type="text" maxlength="100" name="email" size="25" /> 
   <input type="submit" value="OK" />
</form>


<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("#form1").submit(function(){
      var email = $("#email").val();
      if(email != "")
      {
         var filtro = /^([w-]+(?:.[w-]+)*)@((?:[w-]+.)*w[w-]{0,66}).([a-z]{2,6}(?:.[a-z]{2})?)$/i;
         if(filtro.test(email))
         {
     alert("Este endereço de email é válido!");
     return true;
         } else {
           alert("Este endereço de email não é válido!");
           return false;
         }
      } else {
   alert('Digite um email!'); return false;
      }
   });
});
</script>
<form id="form1" action="#">
   Email: <input id="email" type="text" maxlength="100" name="email" size="25" /> 
   <input type="submit" value="OK" />
</form>