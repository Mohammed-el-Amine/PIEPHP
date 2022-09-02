<?php
require("Core/Controller.php");
class UserController extends Core\Controller{
    public function connected(){
        require_once('src/Model/UserModel.php');
        $model = new model();
        $model->connexion();
    }
    public function indexAction(){
        echo"Je suis la methode indexAction de userController";
    }
    public function addAction(){
        echo"Je suis la methode addAction de userController";
    }
    function login(){
        $this->render('login');
    }
    function register(){
        $this->render('register');
    }
    function show(){
        $this->render('show');
    }

    
}

?>