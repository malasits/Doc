<?php 
    session_start();

    //MySQL kapcsolat
    define("_MySQLServer","localhost");
    define("_MySQLUser","Malasits");
    define("_MySQLPassword","Katarina08");
    define("_MySQLDatabase","doc");
    define("_MySQLPort",3308);
   

    //Beolvassa a resource fájl tartalmát
    function LoadResourceFile($jsonLocation){
        $json = file_get_contents($jsonLocation,true);
        return json_decode($json,true);
    }

    $resourceArray = LoadResourceFile("../resources/hu.json");

    //Megizsgálja, hogy be lett e jelentkezve
    //$allowLink - true/false false esetén nem elérhető urlből
    //visszaléptet az indexre, ha nem
    function CheckUserCredential($allowLink){
        //print_r($_SESSION['user']);
       //header("Location: http://127.0.0.1/dok/views/index.php");
    }
?>

<?php
 //phpinfo();
?>