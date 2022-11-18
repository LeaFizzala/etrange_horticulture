<?php

namespace App\controllers;
use App\managers\UserManager;
use App\entities\User;
use Lib\Controller\AbstractController;

class UserController extends AbstractController
{

    public function addUser(){
        echo('Entering function addUser');
        var_dump($_POST);
        if(!empty($_POST)){
            var_dump($_POST);
            $user = new User();
            $userManager = new UserManager();
            $user->setPrenom($_POST['first_name']);
            $user->setNom($_POST['last_name']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $userManager->add($user);
            return $this->redirectToRoute('success');
        }
        return $this->renderView('article/add.php');
    }
    public function success(){
        return $this->renderView('templates/success.php');
    }
}