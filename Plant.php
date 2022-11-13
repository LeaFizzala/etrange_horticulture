<?php

class Plant
{
    private String $name;
    private String $scientific_name;
    private String $description;
    private String $img_url;

    public function __construct(String $nom,
                                String $nom_scientifique,
                                String $description,
                                String $img_url)
    {
    $this-> name = $nom;
    $this -> scientific_name = $nom_scientifique;
    $this -> description = $description;
    $this ->img_url = $img_url;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getScientificName(): string
    {
        return $this->scientific_name;
    }

    /**
     * @param String $scientific_name
     */
    public function setScientificName(string $scientific_name): void
    {
        $this->scientific_name = $scientific_name;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return String
     */
    public function getImgUrl(): string
    {
        return $this->img_url;
    }

    /**
     * @param String $img_url
     */
    public function setImgUrl(string $img_url): void
    {
        $this->img_url = $img_url;
    }


}