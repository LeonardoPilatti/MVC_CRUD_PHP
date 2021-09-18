<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction() {
      $name = filter_input(INPUT_POST, 'name');
      $email = filter_input(INPUT_POST, 'email');

      if($name && $email) {
        $data = Usuario::select()->where('email', $email)->execute(); /// esse select é para pesquisar dentro do banco;

        if(count($data) === 0) {  /// se data for igual a zero, quer dizer que ele não achou e que deve ser enviado para o banco, pois não tem outro usuário com o email igual;
          Usuario::insert([
            'nome' => $name,
            'email' => $email
          ])->execute();  /// esse é para inserir no banco de dados;

             $this->redirect('/');
             exit;
        }
      } else {
        $this->redirect('/novo');
        exit;
      }
    }

    public function edit($args) { /// esse args, ele está recebendo da página home.php, no  <a href="<?= $base; usuario/ $usuario['id']; /editar"> editar 
      // echo 'editando: '.$args['id'];
      $usuario = Usuario::select()->where('id', $args['id'])->one();  /// ele irá me trazer somente um, o primeiro que achar com o 'ONE';

      $this->render('edit', [
        'usuario' => $usuario
      ]);
    }

    public function editAction($args) {
      $name = filter_input(INPUT_POST, 'name');
      $email = filter_input(INPUT_POST, 'email');

      if($name && $email) {
        Usuario::update()
          ->set('nome', $name)
          ->set('email', $email)
          ->where('id', $args['id'])
          ->execute();

        $this->redirect('/');
      }
      
      $this->redirect('/usuario/'.$args['id'].'/editar');
    }

    public function deletar($args) {
      Usuario::delete()
        ->where('id', $args['id'])
      ->execute();

      $this->redirect('/');
    }


};