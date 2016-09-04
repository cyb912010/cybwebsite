var app = angular.module('cybWebsite', ["ngRoute"]);

app.config(function($routeProvider){
    $routeProvider
        .when("/",{
            templateUrl: "profile.html",
            
        })
        .when("/cv",{
            templateUrl: "cv.php",
          
        })
        .when("/contact",{
            templateUrl: "contact.php",
           
        })
        .otherwise({
            redirectTo: "/"
        })
});
