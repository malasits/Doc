<?php 
    /********************************************************************/
    // Global class settings                                                  
    /********************************************************************/
    header("Access-Control-Allow-Origin: *");
    
    require_once("../exceptions/AutenticationException.php");
    
    //require_once("../DAO/DependencyMapper.php");
    //$autenticationException = $injector->make('AutenticationException');

    $SwitchMethods = $_REQUEST["Method"];
    $SwitchMethods();

    /********************************************************************/
    // Login to application                                      
    // param: $username  - username                                                
    // param: $password - password                                      
    /********************************************************************/
    function Login(){

        try {
            //Ellenőrizni kell a hívás típusát
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
                //Ellenőrizni kell a jogosultságot
                if(1 == 1){
                    
                    $postdata = file_get_contents("php://input");
                    $request = json_decode($postdata);

                    $username = $request -> username;
                    $password = $request -> password;
                    
                    //Felhasználónév és jelszó ellenőrzése
                    if($username == "a" && $password == "a"){
                        
                        echo("http://127.0.0.1/dok/views/userInterface.php");

                    }
                    else{
                        throw new AutenticationException("Error Processing Request", 1);
                    }
                }   
                
            }
            else{
                echo ("Bad request method!");
            }
        }
        catch (AutenticationException $e) {
            // header('HTTP/1.1 401 Unauthorize');
            // die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
            $a = new AutenticationException("",1);
            $a -> __die();
        }
        
    };

?>