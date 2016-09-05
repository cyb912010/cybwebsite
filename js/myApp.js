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
app.controller('myCtrl', function($scope, $http,$location,$route) {
     $scope.formData = {};
 $scope.processForm = function() {
  $http({
  method  : 'POST',
  url     : 'form.php',
  data    : $.param($scope.formData),  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
 })
  .success(function(data) {
    document.getElementById("form").reset();
     $scope.formData = {};   
     $scope.form.name.$setUntouched();
     $scope.form.email.$setUntouched();
     $scope.form.subject.$setUntouched();
     $scope.form.message.$setUntouched();
  });
};
});
