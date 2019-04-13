//Create angular service
App.service('LoginService', function ($http) {

    // this.GetLogin = function () {
    //     return $http({
    //         method: "GET",
    //         url:'http://127.0.0.1:80/dok/Controller/loginController.php?Method=GetLogin'
    //     })
    // };

    var myAppUrl = window.location.origin;

    /********************************************************************/
    // Login to application                                      
    // param: $username  - username                                                
    // param: $password - password                                      
    /********************************************************************/
    this.Login = function (usrName, pswd) {
        return $http({
            method: "POST",
            url: myAppUrl + '/dok/api/loginController.php?Method=Login',
            data: {
                username: usrName,
                password: pswd
            },
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
    };

});