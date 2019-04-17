<?php 

    include("../Model/UserModel.php");
    include("../interfaces/ILog.php");

    session_start();

    //MySQL kapcsolat
    define("_MySQLServer","localhost");
    define("_MySQLUser","Malasits");
    define("_MySQLPassword","Katarina08");
    define("_MySQLDatabase","doc");
    define("_MySQLPort",3308);
    
    //Logolás beállítása
    define("_LoggingLevel",4); //DisableLogging <- 0; Error <- 1; Warning <- 2; Info <- 3; Debug <- 4;
    define("_LogFilePath","../Log/");
    define("_LogFileName","log.txt");
    define("_LogFileMaxLength", 10240000); //Maximum 10mb-os fájlok

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