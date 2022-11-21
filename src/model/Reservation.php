<?php
class Reservation{
    public static function getAll(){
        $sql = "SELECT *
        FROM date_de_resa 
        INNER JOIN ordinateurs ON date_de_resa.Id_ordinateurs = ordinateurs.Id_ordinateurs 
        INNER JOIN utilisateurs On date_de_resa.id_user = utilisateurs.id ";
        $connexion = new ConnexionDb();
        $data = $connexion->selectAll($sql);
        return $data;
    }

    public static function create($param){
        $sql = "INSERT INTO `date_de_resa` (Id_Admin, id_user, Id_ordinateurs, date_de_reservation, date_de_fin) VALUES (?, ?, ?, ?, ?)";
        $connexion = new ConnexionDb();
        var_dump($param);
        $data = $connexion->insertALL($sql,$param);
        return $data;
    }
//     public static function findOne($id){
//         $sql = "SELECT * FROM ordinateurs WHERE Id_ordinateurs = ?";
//         var_dump($id);
//         $connexion = new ConnexionDb();
//         $param = array($id);
//         $data = $connexion->selectAll($sql,$param);
//         return $data;
//     }

//     public static function update($value,$id){
//         $sql = "UPDATE ordinateurs SET nom_du_poste = ? WHERE Id_ordinateurs = ?";
//         $connexion = new ConnexionDb();
//         $param = array($value,$id);
//         $data = $connexion->insertALL($sql,$param);
//         return $data;
//     }

    public static function delete($id){
        $sql = "DELETE FROM reservation WHERE Id_ordinateurs = ?";
        $connexion = new ConnexionDb();
        $param = array($id);
        $data = $connexion->updateDelete($sql,$param);
        return $data;
    }
}
?>