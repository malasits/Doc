<?php 
    
    include("../interfaces/IUserSQL.php");
    include("../Model/UserModel.php");
    include("BaseSQL.php");

    class UserSQL extends BaseSQL implements IUserSQL{

        //Lekérdezi a felhasználót username és password alapján
        //UserModel, ha seikeres a lekérés
        //null, ha nincs eredmény
        public function __getUserByCredential($username, $password){
            
            try {

                $connected = $this -> __connect();
                if($connected){
                    //Sikeresen csatlakozott
                    $_checkeduserName = mysqli_real_escape_string($this -> conn,$username);
                    $_checkeduserPassword = mysqli_real_escape_string($this -> conn,$password);

                    
                    $sql = "CALL GetUserByCredential('". $_checkeduserName."','". $_checkeduserPassword ."')";
                    
                    $result = $this -> conn -> query($sql);

                    //Ha van találat
                    if($result->num_rows == 1){
                        while($row = $result->fetch_assoc()) {

                            //User model feltöltése
                             $user = new UserModel();
                             $user -> id = $row["id"];
                             $user -> userName = $row["userName"];
                             $user -> email = $row["email"];
                             $user -> regDate = $row["date"];

                            return $user;
                        }
                    }
                    else{
                        //Ha nem talállt usert
                        return null;
                    }

                    
                }
                else{
                    //TODO:Hiba a csatlakozással
                }

            } catch (\Throwable $th) {
                //TODO: hibakezelés
            }
            finally{
                $this -> conn ->close();
            }
        }

    }

?>