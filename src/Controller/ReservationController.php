<?php
class ReservationController{

    public static function index(){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                $reservations = Reservation::getAll();
                include('./src/views/reservations/index.php');
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
                    if(isset($_POST['ordinateur']) && isset($_POST['user'] )&& isset($_POST['debut']) && isset($_POST['fin'])){
                        $ordi = $_POST['ordinateur'];
                        $user = $_POST['user'];
                        $debut = $_POST['debut'];
                        $fin = $_POST['fin'];
                        if(strlen($ordi)>0 && strlen($user)>0 && strlen($debut)>0 && strlen($fin)>0){
                            $id = $_SESSION['adminId'];
                            $debutArray = explode('T',$debut);
                            $finArray = explode('T',$fin);
                            $debut = $debutArray[0] . ' ' . $debutArray[1];
                            $fin = $finArray[0] . ' ' . $finArray[1];
                            $param = array(intVal($id),intVal($user),intVal($ordi),$debut,$fin);
                            Reservation::create($param);
                            header('Location: /reservations');
                        }else{
                            echo('un champ est vide');
                        }
                    }
                }
                $users = Utilisateurs::getAll();
                $ordinateurs = Ordinateurs::getAll();
                include('src/views/reservations/create.php');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
//     public static function update($id){
//         if(isset($_SESSION['connected'])){
//             if($_SESSION['connected'] == true){
//                 if(isset($_POST) ){
//                     if(isset($_POST['nom'])&& isset($_POST['prenom'])&& isset($_POST['num-id'])){
//                         $nom = $_POST['nom'];
//                         $numId = $_POST['num-id'];
//                         $prenom = $_POST['prenom'];
//                         $param = array($numId,$nom,$prenom, intVal($id[0]));
//                         if(strlen($nom)>0 && strlen($numId)>0 && strlen($prenom)>0){
//                            //faire l'update
//                            Utilisateurs::update($param);
//                             header('Location: /utilisateurs');
//                         }else{
//                             echo('un champ est vide');
//                         }
//                     }
//                 }
//                 $user = Utilisateurs::findOne(intVal($id[0]));
//                 include('src/views/utilisateurs/update.php');
//             }else{
//                 header('Location: /');
//             }
//         }else{
//             header('Location: /');
//         }
//     }
    public static function delete($id){
        if(isset($_SESSION['connected'])){
            if($_SESSION['connected'] == true){
                Reservation::delete(intVal($id[0]));
                header('Location: /reservations');
            }else{
                header('Location: /');
            }
        }else{
            header('Location: /');
        }
    }
}
?>