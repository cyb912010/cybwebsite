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
    document.getElementById("myForm").reset();
     $scope.formData = {};
      $scope.myForm.$setPristine();
      //remove css class 
      // console.log($scope.formData['name']);
    // console.log(data);

    // if (!data.success) {
    //   // if not successful, bind errors to error variables
    //   $scope.errorName = data.errors.name;
    //   $scope.errorSuperhero = data.errors.superheroAlias;
    // } else {
    //   // if successful, bind success message to message
    //   $scope.message = data.message;
    // }
  });
// 
console.log($scope.formData['name']+"wdc");

};
});
