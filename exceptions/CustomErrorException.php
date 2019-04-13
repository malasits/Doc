<?php 
    require_once("../interfaces/IExceptions.php");

    class CustomErrorException extends Exception implements IExceptions{
        
        protected $statusCode = 505;
        protected $message = "Base exception message";
        
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
    }
?>