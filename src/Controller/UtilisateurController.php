<?php

class UtilisateurController{
    public static function index(){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                $allUsers = Utilisateurs::getAll();
                include('./src/views/utilisateurs/index.php');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
    public static function create(){
        
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){

                if(isset($_POST) ){
                    if(isset($_POST['id']) && isset($_POST['nom'] )&& isset($_POST['prenom'])){
                        $id = $_POST['id'];
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        
                        if(strlen($id)>0 && strlen($nom)>0 && strlen($prenom)>0){
                            $param = array($id,$nom,$prenom);
                            Utilisateurs::create($param);
                            header('Location: /utilisateurs');
                        }else{
                            echo('un champ est vide');
                        }
                    }
                }

                include('src/views/utilisateurs/create.php');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
    public static function update($id){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                if(isset($_POST) ){
                    if(isset($_POST['nom'])&& isset($_POST['prenom'])&& isset($_POST['num-id'])){
                        $nom = $_POST['nom'];
                        $numId = $_POST['num-id'];
                        $prenom = $_POST['prenom'];
                        $param = array($numId,$nom,$prenom, intVal($id[0]));
                        if(strlen($nom)>0 && strlen($numId)>0 && strlen($prenom)>0){
                           //faire l'update
                           Utilisateurs::update($param);
                            header('Location: /utilisateurs');
                        }else{
                            echo('un champ est vide');
                        }
                    }
                }
                $user = Utilisateurs::findOne(intVal($id[0]));
                include('src/views/utilisateurs/update.php');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
    public static function delete($id){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                Utilisateurs::delete(intVal($id[0]));
                header('Location: /utilisateurs');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
}

?>