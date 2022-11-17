<?php

namespace entities;
class User
{
    private int $id;
    private string $prenom;
    private string $nom;
    private string $email;
    private string $password;

    /**
     * @param string $prenom
     * @param string $nom
     * @param string $email
     * @param string $password
     */
    public function __construct(string $prenom, string $nom, string $email, string $password)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}