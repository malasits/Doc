<?php 
    include("../DAO/config.php");
    
    class Log implements ILog{

        private $_LogFilePath; //Log fájl helye
        private $_LoggingLevel; //Logolási szint
        private $_userId; //Felhasználói azonosító
        private $_LogFileMaxLength; //Log fájl maximális mérete
        private $_LogFileName; //Log fájl nevve

        /********************************************************************/
        // Konstruktor                                                      
        /********************************************************************/
        public function __construct(){
            $this -> _LogFilePath = constant("_LogFilePath");
            $this -> _LoggingLevel = constant("_LoggingLevel");
            $this -> _LogFileName = constant("_LogFileName");
            $this -> _LogFileMaxLength = constant("_LogFileMaxLength");
        }
        

        /********************************************************************/
        // Error logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __errorLog($statusCode, $methodName, $errorMessage){

            if($this -> _LoggingLevel > 0){

                $this -> _checkUserId();

                $text = date("Y-m-d H:i:s") . " - ERROR - StatusCode: " . $statusCode . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - ERROR - Method: " . $methodName . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - ERROR - Message: " . $errorMessage . " -[". $this -> _userId ."]" ."\n";
                file_put_contents($this -> _LogFilePath . $this -> _LogFileName, $text ,FILE_APPEND);
                $this ->  _splitFile();
            }
        }

        /********************************************************************/
        // Warning logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __warnLog($statusCode, $methodName, $errorMessage){

            if($this -> _LoggingLevel > 1){

                $this -> _checkUserId();

                $text = date("Y-m-d H:i:s") . " - WARNING - StatusCode: " . $statusCode . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - WARNING - Method: " . $methodName . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - WARNING - Message: " . $errorMessage . " -[". $this -> _userId ."]" ."\n";
                file_put_contents($this -> _LogFilePath . $this -> _LogFileName, $text ,FILE_APPEND);
                $this ->  _splitFile();
            }

        }

        /********************************************************************/
        // Info logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __infoLog($statusCode, $methodName, $errorMessage){

            if($this -> _LoggingLevel > 2){

                $this -> _checkUserId();

                $text = date("Y-m-d H:i:s") . " - INFO - StatusCode: " . $statusCode . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - INFO - Method: " . $methodName . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - INFO - Message: " . $errorMessage . " -[". $this -> _userId ."]" ."\n";
                file_put_contents($this -> _LogFilePath . $this -> _LogFileName, $text ,FILE_APPEND);
                $this ->  _splitFile();
            }
        }

        /********************************************************************/
        // Debug logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __debugLog($statusCode, $methodName, $errorMessage){
            
            if($this -> _LoggingLevel > 3){

                $this -> _checkUserId();

                $text = date("Y-m-d H:i:s") . " - DEBUG - StatusCode: " . $statusCode . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - DEBUG - Method: " . $methodName . " -[". $this -> _userId ."]" ."\n";
                $text .= date("Y-m-d H:i:s") . " - DEBUG - Message: " . $errorMessage . " -[". $this -> _userId ."]" ."\n";
                file_put_contents($this -> _LogFilePath . $this -> _LogFileName, $text ,FILE_APPEND);
                $this ->  _splitFile();
            }
        }

        /********************************************************************/
        // Log azonosításához begyűjti a felhasználó azonosítóját                                                   
        /********************************************************************/
        function _checkUserId(){
            if(isset($_SESSION['user']))
            {
                $this -> _userId = $_SESSION['user']->id;
            }
            else{
                $this -> _userId = 0;
            }
        }

        /********************************************************************/
        // Megadott méret után feldarabolja a log fájlt                                                      
        /********************************************************************/
        function _splitFile(){
            $fileSize = filesize($this -> _LogFilePath . $this -> _LogFileName);
            if($fileSize >= $this -> _LogFileMaxLength){
                rename($this -> _LogFilePath . $this -> _LogFileName, $this -> _LogFilePath . "logSave_" . date("Y-m-d-H-i-s").".txt");
            }
        }

    }
?>