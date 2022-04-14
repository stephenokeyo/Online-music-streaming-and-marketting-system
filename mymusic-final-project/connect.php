<?php
$hostname ='localhost';
$username ='root';
$password ='';
$dbname ='contact';
 
try{
    $db = new PDO("mysql: host =$hostname;dbname;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    echo 'connection failed: ' .$e->getMessage();
}