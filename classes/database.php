<?php
class Database{
    private $servername,
            $username,
            $password,
            $dbname;

            public function Connect()
            {
                $this->servername="127.0.0.1";
                $this->username="root";
                $this->password="";
                $this->dbname="bellagids";

                $dsn="mysql:host=".$this->servername.";dbname=".$this->dbname;
                $databaseFile = '/home/kerry/Desktop/bellagids.db';
                try{
                    $pdo=new PDO($dsn,$this->username,$this->password);
                    // $pdo = new PDO('sqlite:' . $databaseFile);
                    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $pdo;
                }catch(PDOException $e){
                    echo "Failed to connect".$e->getMessage();
                }
            }
}

?>