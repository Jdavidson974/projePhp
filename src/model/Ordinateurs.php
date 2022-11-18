<?php

class Ordinateurs{
    public static function getAll(){
        $sql = "SELECT *  FROM ordinateurs";
        $connexion = new ConnexionDb();
        $data = $connexion->selectAll($sql);
        return $data;
    }

    public static function create($value){
        $sql = "INSERT INTO ordinateurs (nom_du_poste) VALUES (?)";
        $connexion = new ConnexionDb();
        $param = array($value);
        $data = $connexion->insertALL($sql,$param);
        return $data;
    }
    public static function findOne($id){
        $sql = "SELECT * FROM ordinateurs WHERE Id_ordinateurs = ?";
        var_dump($id);
        $connexion = new ConnexionDb();
        $param = array($id);
        $data = $connexion->selectAll($sql,$param);
        return $data;
    }

    public static function update($value,$id){
        $sql = "UPDATE ordinateurs SET nom_du_poste = ? WHERE Id_ordinateurs = ?";
        $connexion = new ConnexionDb();
        $param = array($value,$id);
        $data = $connexion->insertALL($sql,$param);
        return $data;
    }

    public static function delete($id){
        $sql = "DELETE FROM ordinateurs WHERE Id_ordinateurs = ?";
        $connexion = new ConnexionDb();
        $param = array($id);
        $data = $connexion->updateDelete($sql,$param);
        return $data;
    }
}


?>