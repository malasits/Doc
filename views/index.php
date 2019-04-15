<?php
    require_once("../views/shared/layout.php");
    require_once("../DAO/config.php");

    //Get the header of the page
    echo GetHeader($resourceArray["indexTitle"]);
?>

    <?php /*--HERE IS THE CONTENT OF THE PAGE--*/?>
    <div ng-controller="LoginController">
    
    <?php /*--CONTAINER--*/?>
      <div class="container">

        <ng-form>
            <label>Username:</label><br/>
            <input type="text" ng-model="username"/><br/>
            <label>Password:</label><br/>
            <input type="password" ng-model="password"/><br/>
            <input type="submit" value="Login" ng-click = "CheckUser()">
        </ng-form>

        </div>
    </div>


<?php 
    //Get the footer of the page
    echo GetFooter();
?>