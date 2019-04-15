<?php
    require_once("../DAO/config.php");

    $conn = mysqli_connect("localhost","Malasits","Katarina08","doc",3308);

        // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        echo "Connected...<br />";
    }

    $sql = "CALL GetUserByCredential('regina','regike')";
    //$sql = "Select * from doc_users";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Username: " . $row["userName"]. " Email:" . $row["email"]. "<br>";
    }

    $conn->close();


?>