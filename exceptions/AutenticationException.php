<?php 

    require_once("../exceptions/CustomErrorException.php");

    class AutenticationException extends CustomErrorException{
        
        public $statusCode = "401";
        public $msg = "Unauthorize";

        // public function __die(){
        //     header("HTTP/1.1 " . $this->statusCode . " " . $this->msg);
        //     die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        // }

        // header('HTTP/1.1 401 Unauthorize');
        // die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>