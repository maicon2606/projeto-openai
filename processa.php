<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  // Aqui você pode processar os dados do formulário, como enviar um email ou salvar no banco de dados

  echo 'Obrigado por entrar em contato, ' . $nome . '!';
}
?>