<?php


/**
 * Description of Connexion
 * Classe permettant la connexion à la base de donnée, et éxectuer les requêtes.
 * @author nimartin5
 */
class Connexion extends PDO{
    private $stmt;
    
    //Fais la connexion à la base de donnée
    public function __construct($dsn, $username, $passwd) {
        parent::__construct($dsn, $username, $passwd);
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    

    //$query : la requete à éxectuer
    //$paramaters : Tableau contenant les paramètres necessaires pour la requête.
    public function executeQuery($query,array $paramaters = []){
        $this->stmt=parent::prepare($query);
        foreach($paramaters as $name => $value){
            $this->stmt->bindValue($name,$value[0],$value[1]);
        }
        return $this->stmt->execute();
    }
    
    //Retourne un tableau de résultat.
    public function getResults(){
        return $this->stmt->fetchall();
    }
}
