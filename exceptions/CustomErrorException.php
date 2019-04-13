<?php 
    require_once("../interfaces/IExceptions.php");

    class CustomErrorException extends Exception implements IExceptions{
        
        protected $statusCode = "408";
        protected $msg = "Base exception message";
        
        // Redefine the exception so message isn't optional
        public function __construct($message, $code = 0, Exception $previous = null) {
            // some code
        
            // make sure everything is assigned properly
            parent::__construct($message, $code, $previous);
        }

        // custom string representation of object
        public function __toString() {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }

        public function customFunction() {
            echo "A custom function for this type of exception\n";
        }

        public function __get($property) {
            if (property_exists($this, $property)) {
              return $this->$property;
            }
        }
        
        public function __set($property, $value) {
            if (property_exists($this, $property)) {
              $this->$property = $value;
            }
        
            return $this;
        }

        public function __die(){
            header("HTTP/1.1 " . $this->statusCode . " " . $this->msg);
            die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }
    }
?>