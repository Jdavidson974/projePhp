<?php
    class DashboardController{

        public static function index(){
            if(isset($_SESSION['connected'])){
                if($_SESSION['connected'] == true){
                    include('src/views/dashboard/dashboard.php');
                }else{
                    header('Location: /');
                }
            }else{
                header('Location: /');
            }
        }
    }

?>