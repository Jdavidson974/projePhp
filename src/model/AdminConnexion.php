<?php
class AdminConnexion{
    public static function connexion($id){
        $sql = "SELECT * FROM admin WHERE Identifiant = ? ";
            $param = array($id);
            $connexion = new ConnexionDb();
            $data = $connexion->selectAll($sql,$param);
            return $data;
    }
}
?>