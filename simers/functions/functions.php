<?php

	function get_persistencia(){
		include './config/config.php';
		return $persistencia;
	}

	function ler_xml(){
		// Faz o load do arquivo XML e retorna um objeto
		$xml = simplexml_load_file('./config/user.xml');
		 // Loop para ler o objeto
		 $table = '<table>';
		 $table .='<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Usuário</th>
					<th>Senha</th>
					<th>Email</th>
					<th>Status</th>
				   </tr>';
		for ( $j = 0; $j < count( $xml ); $j++ ) {
			if($xml->user[$j]['status'] == 1){
				$table .='<tr>';
				$table .='<td>'.$xml->user[$j]['id'] . '</td>';
				$table .='<td>'.$xml->user[$j]['nome'] . '</td>';
				$table .='<td>'.$xml->user[$j]['sobrenome'] . '</td>';
				$table .='<td>'.$xml->user[$j]['usuario'] . '</td>';
				$table .='<td>'.$xml->user[$j]['senha'] . '</td>';
				$table .='<td>'.$xml->user[$j]['email'] . '</td>';
				$table .='<td>'.$xml->user[$j]['status'] . '</td>';
				$table .='</tr>';	
			}
		}
		$table .='</table>';
		print($table);

	}

	function ler_banco(){
		include './config/conexao.php';
		$query = "SELECT id,nome,sobrenome,usuario,senha,email,status FROM user WHERE status = 1";
		$result = mysql_query($query);

		$table = '<table>';
		$table .='<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Usuário</th>
					<th>Senha</th>
					<th>Email</th>
					<th>Status</th>
				   </tr>';

		if (mysql_num_rows($result) > 0) {
	    while($row = mysql_fetch_assoc($result)) {
	    		$table .='<tr>';
				$table .='<td>'.utf8_encode($row['id']) . '</td>';
				$table .='<td>'.utf8_encode($row['nome']) . '</td>';
				$table .='<td>'.utf8_encode($row['sobrenome']) . '</td>';
				$table .='<td>'.utf8_encode($row['usuario'] ). '</td>';
				$table .='<td>'.utf8_encode($row['senha'] ). '</td>';
				$table .='<td>'.utf8_encode($row['email'] ). '</td>';
				$table .='<td>'.utf8_encode($row['status'] ). '</td>';
				$table .='</tr>';	
	    	}
	  	}
		mysql_close();
		$table .='</table>';
		print($table);

	}

	function exibe_dados(){
		$p = get_persistencia();	
		if($p == 0){
			echo "<p>A persistencia que esta sendo utilizada é XML.</p>";
			ler_xml();

		}else{
			echo "<p>A persistencia que esta sendo utilizada é Banco de Dados.</p>";
			ler_banco();
		}
	}


?>