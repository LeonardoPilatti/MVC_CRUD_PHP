<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Editar Usuário</title>


  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">
</head>
<body>
  <?php $render('header') ?>  <!-- /// esse aqui, ele irá procurar dentro da pasta "partials", para carregar o header; -->
  <section>
    <h2>Editar Usuário</h2>
    <form method="POST" action="<?= $base ?>/usuario/<?= $usuario['id']; ?>/editar">   
    <!-- nesse formulario, qunado de ro submit, ele irá para o /novo do UsuarioController, mas que tenha o /addAction -->
      <label for="">
        Nome: <br/>
        <input type="text" name="name" value="<?= $usuario['nome']; ?>">
      </label>
      <br/> <br/>
      <label for="">
        E-mail: <br/>
        <input type="email" name="email" value="<?= $usuario['email']; ?>">
        <br/> <br/>
      </label>

      <input type="submit" value="Salvar">
    </form>

  </section>
  <?php $render('footer') ?>
</body>
</html>