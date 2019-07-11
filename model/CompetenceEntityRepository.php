<?php
namespace model;

class CompetenceEntityRepository{ // création de la classe entity repository

    private $db;
    private $table;
    public function __construct(){}
    
    public function getDb(){ // création de la fonction base de donnée

        if( !$this->db ){ // Différent de la base de donnée

            try{

                $xml = simplexml_load_file('app/config.xml'); // convertie le fichier config.xml en objet
                $this->table = $xml->table;

                try{
                    $this->db = new \PDO("mysql:dbname=". $xml->db . ";host=". $xml->host, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
                    \PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'
                    ) );  // récupère moi les données de la base de donnée 
                }
                catch(\PDOException $e){

                    die("Problème de connexion bdd : " . $e->getMessage() );
                }


            }
            catch(Exception $e){

                die("Problème de fichier de configuration xml !");
            }
        }
        return $this->db;
    }
    //---------------------------------------------------------------------------------//
    public function selectAll(){ // récupère moi toute les informations de la base de donnée

        $q = $this->getDb()->query('SELECT * FROM '.$this->table);

        $r = $q->fetchAll(\PDO::FETCH_OBJ);

        if(!$r){
            return false;
        }
        else{
            return $r;
        }
    }
}

