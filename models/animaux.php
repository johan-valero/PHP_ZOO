<?php

class Animaux {
    //attributs
    private $idAnimal;
    private $nom;
    private $couleur;
    private $origines;
    private $avatar;
    private $idRace;

    //attribue de stockage info de connexion bdd
    public $connect;

    //constructeur
    public function __construct(){
        $this->connect = new ConfigDb();
        $this->connect = $this->connect->getConnection();
    }

    //geter 

    public function getIdAnimal(){
        return $this->idAnimal;
    }

    public function getNameAnimal(){
        return $this->nom;
    }

    public function getColorAnimal(){
        return $this->couleur;
    }

    public function getOriginesAnimal(){
        return $this->origines;
    }

    public function getAvatar(){
        return $this->avatar;
    }

    public function getIdRace(){
        return $this->idRace;
    }

    //setter
    public function setIdAnimal($nouvelId){
        $this->idAnimal = intval($nouvelId,10);
    }

    public function setNom($nouveauNom){
        $this->nom = $nouveauNom;
    }

    public function setCouleur($newColor){
        $this->couleur = $newColor;
    }

    public function setOrigines($newOrigines){
        $this->origines = $newOrigines;
    }

    public function setAvatar($newAvatar){
        $this->avatar = $newAvatar;
    }
    
    public function setIdRace($newIdRace){
        $this->idRace = $newIdRace;
    }

    //fonctions CRUD
    public function readAll(){
        $myQuery = 'SELECT * FROM animaux';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    public function readAllAll(){
        $myQuery = 'SELECT * FROM animaux JOIN races ON animaux.id_race = races.id_race';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    public function readSingle(){
        $myQuery = 'SELECT * FROM animaux WHERE nom=:nom';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->execute();
        return $stmt;
    }

    public function readSingleAll(){
        $myQuery = 'SELECT * FROM animaux JOIN races ON animaux.id_race = races.id_race WHERE nom=:nom';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->execute();
        return $stmt;
    }

    public function createOne(){
        $myQuery = 'INSERT INTO animaux 
                    SET 
                        nom = :nom,
                        couleur = :couleur,
                        origines = :origines,
                        avatar = :avatar,
                        id_race = :idRace';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':couleur', $this->couleur);
        $stmt->bindParam(':origines', $this->origines);
        $stmt->bindParam(':avatar', $this->avatar);
        $stmt->bindParam(':idRace', $this->idRace);
        return $stmt->execute();
    }

    public function updateOne(){
        $myQuery = 'UPDATE animaux
                    SET 
                        nom = :nom,
                        couleur = :couleur,
                        origines =:origines,
                        avatar = :avatar,
                        id_race = :idRace
                    WHERE 
                        id_animal = :idAnimal';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':idAnimal', $this->idAnimal);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':couleur', $this->couleur);
        $stmt->bindParam(':origines', $this->origines);
        $stmt->bindParam(':avatar', $this->avatar);
        $stmt->bindParam(':idRace', $this->idRace);
        return $stmt->execute();
    }

    public function deleteOne(){
        $myQuery = 'DELETE FROM animaux
            WHERE 
                id_animal = :idAnimal';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':idAnimal', $this->idAnimal);
        return $stmt->execute();
    }

}
?>