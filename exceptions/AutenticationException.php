<?php 

    require_once("../exceptions/CustomErrorException.php");

    class AutenticationException extends CustomErrorException{
        
        protected $statusCode = 502;
        protected $message = "Base exception message";

    }
?>