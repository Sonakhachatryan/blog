app.controller('DashboardController',['$scope', '$http', '$location', '$window','DashboardModel',
    function ($scope, $http, $location, $window,DashboardModel) {


        $scope.filteredTodos = [];
        $scope.currentPage = 1;
        $scope.numPerPage = 9;
        $scope.maxSize = 5;

        DashboardModel.getPosts()
            .then(function (response) {
                if(response.data.success) {
                    $scope.posts = response.data.posts;
                    console.log(  response.data.posts);
                    $scope.filteredPosts = $scope.posts.slice(begin, end);
                }
            })
        

        $scope.$watch("currentPage + numPerPage", function() {
            var begin = (($scope.currentPage - 1) * $scope.numPerPage)
                , end = begin + $scope.numPerPage;

            $scope.filteredPosts = $scope.posts.slice(begin, end);
        });
    }]);
