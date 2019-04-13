<?php
    require_once("../views/shared/layout.php");
    require_once("../DAO/config.php");
    //Get the header of the page
    echo GetHeader($resourceArray["userInterfaceTitle"]);
?>

    <?php /*--HERE IS THE CONTENT OF THE PAGE--*/?>
    <div ng-controller="LoginController">
    
    <?php /*--CONTAINER--*/?>
      <div class="container">

        <!-- Top navbar -->
        <nav class="row">
            <div class="col-xs-12" id="userInterfaceNavbarContainer">
                <div class="col-xs-4">
                    <label id="userInterfaceNavbarTitle"><?php echo $resourceArray["userInterfaceNavbarTitle"]?></label>
                </div>
                <div class="col-xs-8 text-right">
                    <label class="userInterfaceNavbarItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo $resourceArray['userInterfaceNavbarNotificationToltip']?>">
                        <i class="far fa-bell userInterfaceNavbarIcon">
                            <span id="userInterfaceNavbarNotification" class="badge">13</span>
                        </i>
                    </label>
                    <label class="userInterfaceNavbarItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo $resourceArray['userInterfaceNavbarSettingsToltip']?>" ><i class="fas fa-cog userInterfaceNavbarIcon"></i></label>
                    <label class="userInterfaceNavbarItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo $resourceArray['userInterfaceNavbarHelpToltip']?>"><i class="far fa-question-circle userInterfaceNavbarIcon"></i></label>
                    <label class="userInterfaceNavbarItem" data-toggle="tooltip" data-placement="bottom" title="<?php echo $resourceArray['userInterfaceNavbarProfileToltip']?>"> Malasits Attila <i class="fas fa-user-circle userInterfaceNavbarIcon"></i></label>
                </div>
            </div>
        </nav>

        <!-- left menu side -->
        <div class="col-xs-1" id="userInterfaceSideNavbar">
            <div class="userInterfaceSideNavbarTitle" data-toggle="collapse" href="#userInterfaceSideNavbarMainFunctions" role="button" aria-expanded="false" aria-controls="userInterfaceSideNavbarMainFunctions"><?php echo $resourceArray['userInterfaceSideNavbarHome']?></div>
            <div class="panel-collapse collapse in" id="userInterfaceSideNavbarMainFunctions">
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesHome']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesCalendar']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesMail']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesNotification']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesAccount']?></div>
            </div>

            <div class="userInterfaceSideNavbarTitle" data-toggle="collapse" href="#userInterfaceSideNavbarServices" role="button" aria-expanded="false" aria-controls="userInterfaceSideNavbarServices"><?php echo $resourceArray['userInterfaceSideNavbarServices']?></div>
            <div class="panel-collapse collapse in" id="userInterfaceSideNavbarServices">
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesDocuments']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesPriceOffer']?></div>
                <div class="userInterfaceSideNavbarItem"><?php echo $resourceArray['userInterfaceSideNavbarServicesGraph']?></div>
            </div>
        </div>

        <!-- user interface content -->
        <div class="col-*" id="userInterfaceContentContainer">
                <!-- <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><br /> -->
                <!-- <div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><br /> -->

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                </ul>

                <div class="tab-content" style="overflow-y: auto;">
                    <div id="home" class="tab-pane fade in active">
                        <iframe style="width:100%;height:850px;" src="https://www.codeproject.com/"></iframe>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>

        </div>


        </div>
    </div>


<?php 
    //Get the footer of the page
    echo GetFooter();
?>