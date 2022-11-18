<?php

namespace App\managers;
use Lib\Manager\AbstractManager;
use App\entities\User;

class UserManager extends AbstractManager
{
    public function find(int $id) {
        return $this->findOne(User::class, [ 'id' => $id ]);
    }
    protected static function hashPassword(string $password) : string {
        return password_hash($password,PASSWORD_ARGON2ID);
    }

    public function add(User $user) {
        return $this->create(User::class, [
                'user_firstname' => $user->getPrenom(),
                'user_lastname' => $user->getNom(),
                'user_email' => $user->getEmail(),
                'user_password' => UserManager::hashPassword($user->getPassword())
            ]
        );
    }

}