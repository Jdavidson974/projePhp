<?php

class OrdinateursController {
    public static function index(){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                $allOrdinateurs = Ordinateurs::getAll();
                include('src/views/ordinateurs/ordinateurs.php');
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
                    if(isset($_POST['nom'])){
                        $nom = $_POST['nom'];
                        if(strlen($nom)>0){
                            Ordinateurs::create($nom);
                            header('Location: /ordinateurs');
                        }
                    }
                }

                include('src/views/ordinateurs/create.php');
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
                    if(isset($_POST['nom'])){
                        $nom = $_POST['nom'];
                        if(strlen($nom)>0){
                           //faire l'update
                           Ordinateurs::update($nom,intVal($id[0]));
                            header('Location: /ordinateurs');
                        }
                    }
                }
                $ordinateur = Ordinateurs::findOne(intVal($id[0]));
                include('src/views/ordinateurs/update.php');
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
                Ordinateurs::delete(intVal($id[0]));
                header('Location: /ordinateurs');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
}

?>