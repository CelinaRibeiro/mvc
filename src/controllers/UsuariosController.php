<?php
namespace src\controllers;

use core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller
{

    public function add()
    {
        $this->render('add');
    }

    public function addAction()
    {
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if ($nome && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                // insere
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();
                // redirect para /
                $this->redirect('/');
            }
        }

        // redirect para /novo
        $this->redirect('/novo');
    }
    
    public function edit($args){
        $usuario = Usuario::select()->find($args['id']);
        
        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }
    
    public function editAction($args){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        
        if ($nome && $email) {
            Usuario::update()
                ->set('nome', $nome)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();
            
            $this->redirect('/');
        }
        $this->redirect('/usuario/'.$args['id'].'/editar');
    }
    
    public function del($args){
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
        
    }
}

