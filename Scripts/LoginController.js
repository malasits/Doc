//Create angular controller
App.controller('LoginController', function ($scope, $rootScope, LoginService) {

    /********************************************************************/
    /* VARIABLES                                                        */
    /********************************************************************/
    $scope.username = "";
    $scope.password = "";

    
    
    /********************************************************************/
    // Login to application                                               
    /********************************************************************/
    $scope.CheckUser = function(){
        LoginService.Login($scope.username,$scope.password)
        .then(function(response){
            window.location.href = response.data;
        }).catch(function (error) {
            alert(error.status + " - " + error.statusText);
        });
    }

});

