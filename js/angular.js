var app = angular.module("characterSheet", ['ngRoute']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: 'home.php',
            // controller: 'homeControl'
        }).
        when('/Login', {
            templateUrl: 'ViewLogIn/LogIn.html',
            // controller: 'homeControl'
        }).
        when('/Regi', {
            templateUrl: 'ViewRegi/Regi.html',
            // controller: 'homeControl'
        }).
        when('/Add', {
            templateUrl: 'ViewAdd/Add.html',
            // controller: 'homeControl'
        }).
        when('/Czytasz', {
            templateUrl: 'js/test.php',
            // controller: 'homeControl'
        }).
        when('/Edit', {
            templateUrl: 'Edit.php',
            // controller: 'homeControl'
        }).
        otherwise({
            templateUrl: 'home.php',
            //  controller: 'characterSheetControl'
        })
    }]);

/*app.controller("homeControl", function($scope, $routeParams){
    $scope.characters = model;
    $scope.char_name = $routeParams.charName;
})*/
