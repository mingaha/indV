<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "contact";


try
{
    $DB_con = new PDO('sqlite:contact.db');
     $DB_con->exec("CREATE TABLE info (id INTEGER PRIMARY KEY,nom TEXT,prenom TEXT) ");
    //  $DB_con->exec("INSERT INTO infos(id,nom,prenom)VALUE (1,moi,toi)");
    //  $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 echo $e->getMessage();
}

include_once 'classCrud.php';

$crud = new crud($DB_con);

?>