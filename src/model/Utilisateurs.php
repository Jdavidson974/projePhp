<?php


class Utilisateurs{
    public static function getAll(){
        $sql = "SELECT *  FROM utilisateurs ORDER BY nom";
        $connexion = new ConnexionDb();
        $data = $connexion->selectAll($sql);
        return $data;
    }

    public static function create($value){
        $sql = "INSERT INTO Utilisateurs (num_identite,nom,prenom) VALUES (?,?,?)";
        $connexion = new ConnexionDb();
        $data = $connexion->insertALL($sql,$value);
        return $data;
    }
    public static function findOne($id){
        $sql = "SELECT * FROM Utilisateurs WHERE id = ?";
        $connexion = new ConnexionDb();
        $param = array($id);
        $data = $connexion->selectAll($sql,$param);
        return $data;
    }

    public static function update($param){
        $sql = "UPDATE Utilisateurs SET num_identite = ? ,  nom = ? ,prenom = ? WHERE id = ?";
        $connexion = new ConnexionDb();
        $data = $connexion->insertALL($sql,$param);
        return $data;
    }

    public static function delete($id){
        $sql = "DELETE FROM Utilisateurs WHERE id = ?";
        $connexion = new ConnexionDb();
        $param = array($id);
        $data = $connexion->updateDelete($sql,$param);
        return $data;
    }
}


?>