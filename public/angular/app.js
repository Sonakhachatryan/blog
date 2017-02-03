var app = angular.module("myApp", ["ngRoute",'ui.bootstrap']);

app.config(['$interpolateProvider', '$routeProvider','$locationProvider',
    function ($interpolateProvider, $routeProvider,$locationProvider) {
        /*$locationProvider.html5Mode({
         enabled: true,
         requireBase: false
         });*/
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');

        $routeProvider
            .when("/", {
                templateUrl : "templates/dashboard",
                controller : "DashboardController"
            });
    }]);/**
 * Created by User on 1/23/2017.
 */
