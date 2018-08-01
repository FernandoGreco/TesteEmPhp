<?php

include ("textos.php");

class controle {

	    function __construct() { 
        $this->txt = new textos();
        $this->textoA = $this->txt->textoA();
        $this->textoB = $this->txt->textoB(); 
    }

		function Preposicao(){
			//retorna palavras com 3 letras
			$Tresletras = controle::BuscaPalavras ($this->textoB,3);
			$LetrasFoo = controle::LetraQueTerminaEmTipoFoo($Tresletras);
			$Preposicao = controle::TiraPalavra($LetrasFoo,'b');
				return $Preposicao;
	}

		function Verbos(){
			$seteLetrasOuMais = controle::Busca7PalavrasouMais ($this->textoB);
			$LetrasFoo = controle::LetraQueTerminaEmTipoFoo($seteLetrasOuMais);
				return $LetrasFoo;
		}

		function VerbosPrimeiraPessoa(){
			$verbos = controle::Verbos ();
			$LetraTipoBar = controle::LetraQueIniciaEmTipoBar($verbos);
			//$Verbos = controle::Verbos();
				return $LetraTipoBar;
		}


		function ListaOrdenada (){
       			$ordemAlfabeto = array('j','n','g','m','c','l','q','s','k','r','z','f','v','b','w','p','x','d','h','t');
       			//retira palvras repetidas
       			$textpB = array_unique($this->textoB);
       			controle::Ordenar($textpB,$ordemAlfabeto);
       }



	    //retorna as palavras com determinada quantidade de letras
		function BuscaPalavras ($vetor,$quantidade)
		{
		  foreach ($vetor as &$valor) {
		   if(strlen($valor) == $quantidade)
           			$resultado[]= $valor;
  }
  					return $resultado;
		}


		function Busca7PalavrasouMais ($vetor){
			foreach ($vetor as &$valor){
				if(strlen($valor) == 7 || strlen($valor) > 7)
           			$resultado[]= $valor;
  }
  						return $resultado;
		}


		function LetraQueTerminaEmTipoFoo ($vetor){
 			foreach ($vetor as &$value) {
	    		if(in_array(substr($value,-1),array('b','v','s','h','z')))
	            $resultado[]=$value;
	     }

    				return $resultado;
  }

  		  function LetraTipoBar ($vetor){
	  			//tranforma array em string
	    		$string =  implode($vetor);
	    		$n_caracteres=strlen($string);
	    		//percorre todas as letras e seleciona as que são tipo bar
		    	for ($i = 0; $i < $n_caracteres; $i++) {
		    		if($string[$i] != 'b' && $string[$i] != 'v' && $string[$i] != 's' && $string[$i] != 'h' && $string[$i] != 'z')
		    			$array[] = $string[$i]; 

}		
						$result = array_unique($array);
						return $result;
	     }


	   
	     function LetraQueIniciaEmTipoBar ($vetor){
			  foreach ($vetor as &$value) {
			    //regra para letras tipo BAR      
			    if(in_array(substr($value,0,1),array('x','n','g','l','c','w','k','d','m','t','r','j','q','p','f')))
			                  $resultado[]=$value;
			     }
			    return $resultado;
			  }

 		


  		function TiraPalavra ($vetor,$palavra){
                  foreach ($vetor as &$value){
                  //tira as palavras que comtém letra enviada por parametro
                  if(strpos ($value,$palavra)===false)
                    $resultado[]=$value;
                  }
                    return $resultado;   
                 }



			       function Ordenar ($texto,$ordem){
			    $i=0;
			    while ($i < sizeof($ordem)) {
			    for($j=0;$j< sizeof($texto);$j++){
			      if(substr($texto[$j],2,1) == $ordem[$i])
			      $textoOrdenado[]=$texto[$j]; 
			    }
			    $i++; 
			     
			}
			    controle::Ordenar2Letra ($textoOrdenado,$ordem);
			  }

			   function Ordenar2Letra ($texto,$ordem){
			    $i=0;
			    while ($i < sizeof($ordem)) {
				    for($j=0;$j< sizeof($texto);$j++){
					      if(substr($texto[$j],1,1) == $ordem[$i])
						      $textoOrdenado[]=$texto[$j]; 
						    }
							    $i++; 
					     
			}
			    controle::Ordenar1Letra ($textoOrdenado,$ordem);
			}

			function Ordenar1Letra ($texto,$ordem){
				    $i=0;
				    while ($i < sizeof($ordem)) {
				    for($j=0;$j< sizeof($texto);$j++){
				      if(substr($texto[$j],0,1) == $ordem[$i])
				      $textoOrdenado[]=$texto[$j]; 
				    }
				    $i++; 
				     
				}   
				    echo "<br>"."<br>"."<b>"."Texto B Ordenado: "."</b>";
				    foreach ($textoOrdenado as &$value){
				      echo $value." ";
				    }
				}

}


?>