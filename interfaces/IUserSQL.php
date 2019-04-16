<?php 
    interface IUserSQL{
        public function __getUserByCredential($username, $password);
    }
?>