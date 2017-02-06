var app = angular.module("myApp", ["ngRoute",'ui.bootstrap']);

app.config(['$interpolateProvider', '$routeProvider','$locationProvider',
    function ($interpolateProvider, $routeProvider,$locationProvider) {
       
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');

        $routeProvider
            .when("/", {
                templateUrl : "templates/dashboard",
                controller : "DashboardController"
            })
            .when("/posts/:id",{
                templateUrl : "templates/posts",
                controller : "PostController"
            });
    }]);/**
 * Created by User on 1/23/2017.
 */
