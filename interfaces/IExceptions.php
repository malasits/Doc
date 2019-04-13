<?php 

 interface IExceptions{

    // custom string representation of object
    public function __toString();
    public function customFunction();
    public function __get($property);
    public function __set($property, $value);
 }

?>