<?php

/*
envio 
CPF ou MATRICULA


Recebo 
NOME DO ALUNO ou NOME DO CONTRATANTE?
*/

		$login = array(
			'login'	=> '141005',
			'pass' 	=> 'teste@',
		);

		$cadastro = array(
			'ALN_Matricula' => '072360',
			'ALN_Participa' => '0', // 1 Participa 0 não participa
			'NomeCov1' => '', //minimo de 10 caracteres 
			'DtNasCov1' => '', // no padrão americano
			'NomeCov2' => '', //minimo de 10 caracteres
			'DtNasCov2' => '', // no padrão americano

		);

		$pesquisa = array(
			'ALN_Matricula'	=> '072360'
		);

		

		$fields = array
		(
			'login'	=> $login,
			'cadastro' => $cadastro,
			'pesquisa' => $pesquisa,
			'chave'	=> 'a38e75eb26ef967fcf8c01e43477935ed02f3a47',
			'opcao' => 'L' //  [L] para fazer Login [C] para cadastrar [P] para pesquisar inscrições relizada.  [PG] para pesquisar todos as inscrições realizadas.
			
		);
		 
		$headers = array
		(
			'Content-Type: application/json',
		);

		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://www.leonardoonline.com.br/view/ws/encontro.php');
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
		$arRetorno = json_decode ($result ,true);
		print_r($arRetorno);
	
		

	



?>