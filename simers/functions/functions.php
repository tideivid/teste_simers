<?php

	function get_persistencia(){
		return $persistencia;
	}

	function ler_xml(){
		// Faz o load do arquivo XML e retorna um objeto
		$arquivo_xml = simplexml_load_file('./config/user.xml');
		 
		// Loop para ler o objeto
		for ( $j = 0; $j < count( $arquivo_xml ); $j++ ) {
			// Imprime o valor o valor da tag <id></id>
			echo $arquivo_xml->link[$j]->id . '<br>';
			
			// Imprime o valor o valor da tag <title></title>
			echo $arquivo_xml->link[$j]->title . '<br>';
			
			// Imprime o valor o valor da description <description></description>
			echo $arquivo_xml->link[$j]->description . '<br>';
			
			// Imprime o valor o valor da description <image></image>
			echo $arquivo_xml->link[$j]->image . '<br>';
			
			// Apenas uma quebra de linha a mais
			echo '<hr>';
		}
	}

	function ler_banco(){

	}

	function exibe_dados(){
		$p = get_persistencia();
		
		if($p = 0){
			echo "xml";
			ler_xml();
		}

		if($p = 1){
			echo "banco";
			ler_banco();
		}
	}


?>