<?php
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  
  // Caminho para o arquivo de texto
  $caminhoArquivo = 'acessos.txt';
  
  // Abre o arquivo em modo de escrita (append)
  $arquivo = fopen($caminhoArquivo, 'a');
  
  // Escreve os dados no arquivo
  fwrite($arquivo, "Nome: ".$nome."\n");
  fwrite($arquivo, "telefone: ".$telefone."\n\n");
  fwrite($arquivo, "Email: ".$email."\n\n");
  
  // Fecha o arquivo
  fclose($arquivo);
  header("Location: sucesso.html");
?>
