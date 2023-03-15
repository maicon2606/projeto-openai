<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Alunos</title>
  <link rel="stylesheet" href="stylr.css">
</head>
<body>
  <h1>Cadastro de Alunos</h1>
  
  <?php
  // Define as variáveis ​​iniciais com valores vazios
  $nome = '';
  $email = '';
  $idade = '';
  
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    
    // Valida os dados do formulário
    $errors = array();
    if (empty($nome)) {
      $errors[] = 'O nome é obrigatório.';
    }
    if (empty($email)) {
      $errors[] = 'O e-mail é obrigatório.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'O e-mail não é válido.';
    }
    if (empty($idade)) {
      $errors[] = 'A idade é obrigatória.';
    } else if (!is_numeric($idade)) {
      $errors[] = 'A idade deve ser um número.';
    }
    
    // Se não houver erros, exibe os dados do formulário
    if (empty($errors)) {
      echo "<p>Nome: $nome</p>";
      echo "<p>E-mail: $email</p>";
      echo "<p>Idade: $idade</p>";
    } else {
      // Caso contrário, exibe os erros
      echo "<ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul>";
    }
  }
  ?>
  
  <form method="post">
    <p>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
    </p>
    <p>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    </p>
    <p>
      <label for="idade">Idade:</label>
      <input type="text" id="idade" name="idade" value="<?php echo $idade; ?>">
    </p>
    <p>
      <input type="submit" value="Enviar">
    </p>
  </form>
</body>
</html>
