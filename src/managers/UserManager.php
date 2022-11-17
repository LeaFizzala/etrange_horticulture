<?php

namespace App\managers;
use Lib\Manager\AbstractManager;
use App\entities\User;

class UserManager extends AbstractManager
{
    public function find(int $id) {
        return $this->findOne(User::class, [ 'id' => $id ]);
    }

    public function add(User $user) {
        return $this->create(User::class, [
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword()
            ]
        );
    }
}