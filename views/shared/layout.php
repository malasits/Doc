<?php 

    /********************************************************************/
    /* DEFINITION: This function is create the header of pages           */
    /* PARAMETERS: -$title: Title of webpage                            */
    /* RETURN:     Header section of HTMLpage                           */
    /********************************************************************/
    function GetHeader($title){

        $s = "";
        $s.="<!DOCTYPE Html>\n";
        $s.="<html>\n";
        $s.="<header>\n";

        $s.="\t<title>$title</title>\n";
        $s.="\t<meta charset='UTF-8'>\n";
        $s.="\t<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        
        $s.="\t<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js'></script>\n";
        
        $s.="\t<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>\n";
        $s.="\t<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>\n";
        $s.="\t<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>\n";
        $s.="\t<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>\n";
        $s.="\t<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>\n";

        $s.="\t<script src='../Scripts/Module.js'></script>\n";
        $s.="\t<script src='../Scripts/LoginService.js'></script>\n";
        $s.="\t<script src='../Scripts/LoginController.js'></script>\n";

        $s.="\t<link rel='stylesheet' href='../StyleSheets/Style.css'>\n";
        $s.="\t<link rel='stylesheet' href='../StyleSheets/userInterfaceStyle.css'>\n";
        $s.="\t<link rel='stylesheet' href='../StyleSheets/userInterfaceDefaultColors.css'>\n";

        $s.="</header>\n";
        $s.="<body ng-app='App'>\n";

        return $s;
    }

    /********************************************************************/
    /* DEFINITION: This function is create the footer of pages          */
    /* PARAMETERS: -                                                    */
    /* RETURN:     Footer section of HTMLpage                           */
    /********************************************************************/
    function GetFooter(){

        $s ="";
        $s.="</body>\n";
        $s.="</html>\n";

        return $s;

    }

?>