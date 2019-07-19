<?php
    function connect(){
            $host="localhost";
            $user="root";
            $password="";
            $dbname="databsite";
            $dsn="mysql:host=".$host.";dbname=".$dbname.";charset=utf8";
                                                    
            try{
                $pdo=new PDO($dsn,$user,$password);
                }catch(Exception $e){ 
                die("erreur:".$e->getMessage());
                }
            return $pdo;
    }
    
?>