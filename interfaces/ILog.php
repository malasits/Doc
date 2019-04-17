<?php 

    interface ILog{
        /********************************************************************/
        // Konstruktor                                                      
        /********************************************************************/
        public function __construct();

        /********************************************************************/
        // Error logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __errorLog($statusCode, $methodName, $errorMessage);

        /********************************************************************/
        // Warning logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __warnLog($statusCode, $methodName, $errorMessage);

        /********************************************************************/
        // Info logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __debugLog($statusCode, $methodName, $errorMessage);

        /********************************************************************/
        // Debug logolás fájlba                                      
        // param: $statusCode  - hibakód                                                
        // param: $methodName - metódus neve (könyvtár/class/metódus)                                      
        // param: $errorMessage - hibaüzenet                                      
        /********************************************************************/
        public function __infoLog($statusCode, $methodName, $errorMessage);

        /********************************************************************/
        // Log azonosításához begyűjti a felhasználó azonosítóját                                                   
        /********************************************************************/
        function _splitFile();

        /********************************************************************/
        // Megadott méret után feldarabolja a log fájlt                                                      
        /********************************************************************/
        function _checkUserId();
    }

?>