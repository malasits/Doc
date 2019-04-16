<?php
    include("../DAO/config.php");
    include("../interfaces/IBaseSQL.php");

    class BaseSQL implements IBaseSQL{

        private $_MySQLServer;
        private $_MySQLUser;
        private $_MySQLPassword;
        private $_MySQLDatabase;
        private $_MySQLPort;
        protected $conn;
        protected $injector;
        
        //Constructor
        public function __construct(){
            $this -> _MySQLServer = constant("_MySQLServer");
            $this -> _MySQLUser = constant("_MySQLUser");
            $this -> _MySQLPassword = constant("_MySQLPassword");
            $this -> _MySQLDatabase = constant("_MySQLDatabase");
            $this -> _MySQLPort = constant("_MySQLPort");
        }

        //Kapcsolatot nyit az adatbázis felé
        //true, ha sikeres
        //false, ha sikertelen
        function __connect(){

            $this -> conn = mysqli_connect(
                $this -> _MySQLServer,
                $this -> _MySQLUser,
                $this -> _MySQLPassword,
                $this -> _MySQLDatabase,
                $this -> _MySQLPort
            );

            if (mysqli_connect_errno()) {
                return false;
            }
            else{
                return true;
            }
        }

    }

?>