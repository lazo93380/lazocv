<?php

namespace controller;

class FormationController{
    
    public $db;
    public function __construct(){

        $e = new Error; // gestion des erreurs. Pas besoin d'écrire : controller\Error car le fichier se trouve déjà à l'intérieur

        $this->db = new \model\FormationEntityRepository;
    }
    //---------------------------------------------------------------------------------//
    public function redirect($location){

        header('Location : '.$location);
    }
    //---------------------------------------------------------------------------------//
    public function handleRequest(){
        $op = isset($_GET['form']) ? $_GET['form'] : Null;

        try{

            if( !$op || $op == 'list'){
                $this->listFormation();
            }
            else{

                $this->showError( "Page not found", 'Page for operation'. $op .'was not found.');
            }
        }
        catch(Exception $e){

            $this->showError("Application erro", $e->getMessage() );
        }
    }
    //---------------------------------------------------------------------------------//
    public function listFormation(){

        $orderby = isset( $_GET['orderby'])?$_GET['orderby'] : NULL;
        $formations = $this->db->selectAll($orderby);

        include 'view/formations/formations.php';
    }
}