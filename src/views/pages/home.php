<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home CRUD em MVC</title>

  <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css">

</head>
<body>
  <?php $render('header') ?>  <!-- /// esse aqui, ele irá procurar dentro da pasta "partials", para carregar o header; -->
  <section>
    <a href="<?= $base; ?>/novo">Novo Usuário</a>   
    <!-- aqui nesse A, ele irá para a página no UsuarioController, que é o de add -->
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÔES</th>
      </tr>
      <?php foreach($usuarios as $usuario): ?>
        <tr>
          <td><?= $usuario['id']; ?></td>
          <td><?= $usuario['nome']; ?></td>
          <td><?= $usuario['email'] ?></td>
          <td>
            <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">[ editar ]</a>
            <a href="<?= $base ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" >[ excluir ]</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>

  </section>
  <?php $render('footer') ?>
</body>
</html>