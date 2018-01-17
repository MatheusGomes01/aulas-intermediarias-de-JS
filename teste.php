<script>
/*var regex = /javascript/i;
var string = "JavaScript";
alert(regex.test(string));	*/

/*var str = "Qual é o Doce mais doce que o doce?";
//i seve para localizar a string definida anteriormente
//match é para localizar todas as strings referentes a string informada
alert(/doce/ig.exec(str));
alert(str.match(/doce/ig));*/

/* Metacaracteres */
// . serve para verificar se a string é verdadeira ou falsa; 
//alert(/./.test("Pier"));
// \w serve para verificar se a string com numeros e @ é verdadeira ou falsa; 
// \s serve para verificar se a string com espaço é verdadeira ou falsa; 
// \dserve para verificar se um numero é verdadeira ou falsa;
// ^ serve para verificar se um numero no começo do texto;  
// $ serve para verificar se um numero no final do texto; 
//alert(/\w/.test("Pier21"));

/*var str = "O rato roeu a roupa do rei de roma"
alert(str.match(/r[a-z]/ig));
alert(str.replace(/r[a-z]/ig, "xxx"));*/

var url = "www.xti.com.br/clientes-2011.html";
//	 	  "http://www.xti.com.br/2011/clientes.jsp";
var re = /www.xti.com.br\/\w{2,}-\d{4}\.html/;
alert(re.test(url));
re = /(www.xti.com.br)\/\w{2,}-\d{4}\.html/;
alert(url.replace(re, "http://$1"));
</script>
<script>
//comprimento de uma circunferencia com 30 de raio
	//alert(2 * Math.PI * 30);
//ABS serve para dar a ẽxata do numero
	//alert(Math.abs(3));
// MIN representa o menor valor dentre os conjuntos passados
//max serve para a maior
// floor arredonda pra baixo do numero mais proximo
// ceil arredondo pra cima, para o numero maior
// pow é a função para elevar o numero a uma potencia
//sqrt serve maramostrar a raiz quadrada
// random retorna um numero dinamico (um numero entre 0 e 1)
// exp eleva o numero de euler a potencia do parametro
//log que extrai o logaritimo natural do parametro
//sin retorna o valor do sen do ang informado
// cos retorna o conseno de um determidado ang
//tan que retorna a tangente de um determinado angulo
//asin retorna um valor numero em radianos representado o angulo cujo o seno seja passado do parametro
//acos retorna um valor numerico em radianos representando um arco cujo coseno seja passado no valor da função
//atan que retorna um valor numerico entre menos pi divido por dois e pi dividido por dois
// atan2 retorna um valor numero entre menos pi e pi representando o arco em radianos cujo a tangente é igual a consiente entre os dois parametro informado
	//alert(Math.min(2,7,-5,9));


</script>
<script>
/*	
//sempre que carregar a página atualizar as poltronas
window.onload = function(){
	carregarPoltronas
}

var poltronas = [false, true, false, true, true, true, false, true, false];

function carregarPoltronas(){
	var imagens = documentElementByTarName("img");
	for(var i=0; i<imagens.length; i++){
		if(poltornas[i]){
			imagens[i].src = "img/ball_disponivel.png";
		} else {
			imagens[i].src = "img/ball_indisponivel.png";
		}
	}
}

function selecionarPoltrona(){
	var imagens = documentElementByTarName('img');
	for(var i=0; i<popltronas.length; i++){
		imagens[i].src = "img/ball_selecionada";

		var quer = confirm ("Você quer está poltrona ?");
		if (quer){
			break;
		}else {
			imagens [i].src = "img/ball_dispónivel.png";
		}
	}
}

	// selecionando poltronas para casal


	function selecionarCasal(){
		var imagens = document.getElementsByTagName('img');
		for(var i=0; i<poltronas.length; i++){
			if(poltronas[i] && poltronas[i+1]){
				imagens[i].src = "img/ball_selecionada.png";
				imagens[i+1].src = "img/ball_selecionada.png";


				var quer = confirm ("Você quer estas poltronas >");
				if(quer){
					break;
				}else {
					imagens [i].src = "img/ball_diṕonivel.png";
					imagens [i+1].src = "img/ball_diṕonivel.png";
				}
			}

		}
	}
	*/
</script>
<script>
	/* && verifica se o lado direito e esquerdo dos operandos retornando se os dois são verdadeiros "AND (e)"
	   || verifica se um dos operandos é online "OR (ou)"
	   ! altera o resultado buliando da alteraão "NOT (não)"
	*/


	/*var x = 6;
	alert( (x >= 1) && (x <= 5));
	*/

	//var y = 6;
	//alert( (y >= 1) && (y <= 10));


	
	//console.log(x);
	//console.log(y);
</script>




<script>
	/*var frutas = ["cupuaçú", "banana", 123, "graviola", "laranja"];
	function todos(elem, ind, obj){
		return (typeof elem == "string");// number substitui a string por number
		// filter não tem o typeof é um elem.indexOf() > 0
		//map é um elem = elem.toUpperCase()
	}
	alert(frutas.every(todos)); // some - verifica se algum elemento é numero, filter - filtra o array com base em uma funçaõ que foi estipulada e retorna o array resultante do filtro, map
	*/

	/* && verifica se o lado direito e esquerdo dos operandos retornando se os dois são verdadeiros "AND (e)"
	   || verifica se um dos operandos é online "OR (ou)"
	   ! altera o resultado buliando da alteraão "NOT (não)"



	/*var x = 6;
	alert( (x >= 1) && (x <= 5));
	

	var y = 6;
	alert( (y >= 1) && (y <= 10));


	
	//console.log(x);
	console.log(y);*/

	/*var x = prompt ("informe um numero maior que 10");
	try {					
		if(x < 10){
			throw "número menor que 10";
		}
		alert (x);
	}catch(e){
		alert(e);

	}*/


		/*try {
		var x = a;
		var b = x + 10;
		alert (b);
	}catch (e){
		alert (e.name + " - " + e.message); // or "e.toString()"
	}*/


	/*var Carro = {
		marca : "Nissan",
		modleo : "350z",
		potencia: {
			cavalos : "350",
			vleocidade : "320km/h"
		}
	};
	with (Carro.potencia){
		alert (cavalos);
		alert (velocidade);
	}
	//alert (Carro.potencia.cavalos);
	*/


 //var nome = "Ricardo";
 //alert (typeof(nome));

//var nome = "Ricardo";
//alert (nome.toUpperCase()); //deixa tudo em maiusculo

//alert (new String (nome).lenght);
 //alert (nome.lenght);

// var b = true;
 //alert (typeof(b));

 /*var b = new Boolean (null);
 alert (b);*/

 /*var b = new Boolean (0);
 alert (b.toString());*/

 /*var n = new Number ("120.35123");
 alert(n.toFixed());*/

 /*var n = new Number ("120.35123");
 alert(n.toPrecision(3));*/

 /*var n = new Number ("120.35123");
 alert(n.toExponential(3));*/

 /*var x = new String ("Texto dentro de texto aspas");
 var re = /[a-e]/;
  document.writeln (x + "<br/>");
  document.writeln (x.lenght + "<br/>");
  document.writeln (x.charAt(x.length - 1) + "<br/>");
  document.writeln (x.concat("Java Script") + "<br/>");
  document.writeln (String.fromCharCode(115, 123, 234) + "<br/>");
  document.writeln (x.indexOf("dentro") + "<br/>");
  document.writeln (x.lastIndexOf("texto") + "<br/>");
  document.writeln (x.match(re) + "<br/>");
  document.writeln (x.replace("texto", "txt") + "<br/>");

  document.writeln (x.substring(8,5) + "<br/>");
  document.writeln (x.substr(5,8) + "<br/>");
  document.writeln (x.slice(5,8) + "<br/>");
  document.writeln (x.split(",")[1] + "<br/>");

  document.writeln (x.toLowerCase() + "<br/>");
  document.writeln (x.toUpperCase() + "<br/>");

  document.writeln (x.big() + "<br/>");
  document.writeln (x.blink() + "<br/>");
  document.writeln (x.sup() + "<br/>");
  document.writeln (x.strike() + "<br/>");
  document.writeln (x.bold() + "<br/>");
  document.writeln (x.italics() + "<br/>");
  document.writeln (x.small() + "<br/>");
  document.writeln (x.link("http://www.xti.com.br") + "<br/>");
  document.writeln (x.fontcolor("blue") + "<br/>");
  */

</script>

<script>
	

//var pessoas = [ ["Ricardo", "M"], ["Sandra", "F"]];

//alert (pessoas[1][1]);

/*var paises = new Array();

paises[0] = "Brasil";
paises[1] = "Rússia";
paises[2] = "Índia";
paises[3] = "China";

alert(paises);*/


	/*var paises = new Array ("Brasil", "Rússia", "Índia", "China", "Brasil");

	var s = "Açai";
	for(var i=0; i<s.length; i++){
		alert(s[i]);
	}*/
	


	//var s = "Açaí"
	//alert(s.length);

	/*sintaxe literal
	var s = "ssssss";
	var S = new String ("ssssss")
	alert(paises.lastIndexOf("Brasil"));*/

	//for(var i=0; i<paises.length; i++)
	//alert(paises[i])
	//alert(paises.length);


	//paises[0] = "BRAZIL"
	//alert (paises[0]);


	/*var pais1 = "Brasil";
	var pais2 = "Rússia";
	var pais3 = "Índia";
	var pais3 = "China";*/
</script>