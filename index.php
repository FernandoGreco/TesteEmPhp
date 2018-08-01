<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TESTE PHP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Fernando Greco">
</head>

<body>

<?php 

include ("controle.php");

  //classe que manipula o array texto A e B
  $controle = new controle();


  echo "Quantidade de preposições no texto B: ".sizeof($controle->Preposicao())."<br>";

  echo "<br>"."Quantidade de verbos no texto B: ".sizeof($controle->Verbos());


  echo "<br>"."<br>"."Quantidade de verbos primeira pessoa no texto B: ".sizeof($controle->VerbosPrimeiraPessoa());
 	
  
  $controle->ListaOrdenada ();

 

?>
<br><br>Boa tarde, o que consegui fazer foi isso, o "numeros bonitos" preciso de mais tempo para resolver, o código da para ser melhorado (diminuir repetições) porém preciso de mais tempo também.
</body>
</html>
