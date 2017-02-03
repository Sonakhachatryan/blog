app.factory('DashboardModel', ['$http', function ($http) {
    return {

        getPosts: function(){
            return $http({
                method: "get",
                url: "posts"
            });
        },
    };
}]);