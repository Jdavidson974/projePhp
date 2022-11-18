<?php
    class ConnexionDb{

        private $pdo;
        private $stmt;

        public function __construct()
        {
            try {

                $this->pdo = new PDO("mysql:host=". DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
                        DB_USER, DB_PASSWORD, [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                        ]);
            }
            catch(Exception $e)
            {
                exit($e->getMessage());
            }
        }

        public function __destruct(){
                try {
                    if($this->stmt != null ) { $this->stmt = null; }; 
                }
                catch(Exception $e)
                {
                    return false;
                }
        }

        public function selectAll($sql,$arg=null){
            try {
                $this->stmt = $this->pdo->prepare($sql);
                $this->stmt->execute($arg);
                return $this->stmt->fetchAll();
            }
            catch(Exception $e)
            {
                die("Probleme rencontré lors du select");
            }
        }
        public function insertALL($sql,$arg=null){
            try{
                $this->stmt = $this->pdo->prepare($sql);
                $this->stmt->execute($arg);
            }catch(Exception $e){
                die("Probleme rencontré lors de l'insert");
            }
            
        }
        public function updateDelete($sql,$arg=null){
            try{
                $this->stmt = $this->pdo->prepare($sql);
                $this->stmt->execute($arg);
            }catch(Exception $e){
                die("Probleme rencontré lors de l'update ou du delete");
            }
        }

    }
        define("DB_HOST","localhost");
        define("DB_NAME","la_bu");
        define("DB_CHARSET","utf8");
        define("DB_USER","root");
        define("DB_PASSWORD","");