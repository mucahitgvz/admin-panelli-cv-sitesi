<?php 

try {

$db= new PDO("mysql:host=localhost;dbname=MucahitGevezCvResume; charset=utf8",'root','');


} catch (PDOException $e) {

 echo $e->GetMessage();
}



?>