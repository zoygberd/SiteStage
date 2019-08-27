<?php
    function connecto(){
            $host="localhost";
            $user="root";
            $password="";
            $dbname="news";
            $dsn="mysql:host=".$host.";dbname=".$dbname.";charset=utf8";
                                                    
            try{
                $pdo=new PDO($dsn,$user,$password);
                }catch(Exception $e){ 
                die("erreur:".$e->getMessage());
                }
            return $pdo;
    }
    
?>