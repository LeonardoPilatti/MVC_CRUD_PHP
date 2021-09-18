<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        $usuarios = Usuario::select()->execute();   /// esse é para pegar todos os dados da tabela de usuários;

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    }
}