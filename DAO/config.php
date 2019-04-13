<?php 

    //Beolvassa a resource fájl tartalmát
    function LoadResourceFile($jsonLocation){
        $json = file_get_contents($jsonLocation,true);
        return json_decode($json,true);
    }

    $resourceArray = LoadResourceFile("../resources/hu.json");
?>

<?php
 //phpinfo();
?>