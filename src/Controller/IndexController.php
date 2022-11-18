<?php
    class IndexController{
        public static function index(){
            if(isset($_SESSION['connected'])){
                if($_SESSION['connected'] == true){
                    header('Location: dashboard');
                }
            }
            if(isset($_POST) ){
                if(isset($_POST['login'])){
                    $login = $_POST['login'];
                }
                if(isset($_POST['password'])){
                    $password = $_POST['password'];
                }

                // Check login and password 
                if(isset($password) && isset($login)){
                    $index = new AdminConnexion;
                    $data = $index->connexion($login);
                    if(!empty($data)){
                        if (password_verify($password,$data[0]['password'])) {
                            //connexion ok
                            $_SESSION['connected'] = true;
                            $_SESSION['adminId'] = $data[0]['Id_Admin'];
                            header(('Location: /dashboard'));
                        }else{
                            //connexion ko
                            var_dump('Identifiant ou mot de passe incorect');
                        }
                    } else {
                         //connexion ko
                        var_dump('Identifiant ou mot de passe incorect');
                    }
                    
                }
                
            }
            include('./src/views/accueil/index.php');
        }
    }
?>