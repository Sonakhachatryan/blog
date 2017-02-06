app.controller('DashboardController',['$scope', '$http', '$location', '$window','DashboardModel',
    function ($scope, $http, $location, $window,DashboardModel) {


        $scope.filteredPosts = [];
        $scope.currentPage = 1;
        $scope.numPerPage = 9;
        $scope.maxSize = 5;
        $scope.posts=[];

        DashboardModel.getPosts()
            .then(function (response) {
                if(response.data.success) {
                    $scope.posts = response.data.posts;
                    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
                        , end = begin + $scope.numPerPage;
                    var posts = $scope.posts.slice(begin, end);
                    var j=-1;
                    var k=0;

                    for (var i=0;i<posts.length;i++) {
                        if (i % 3 == 0) {
                            j++;
                            k=0;
                            $scope.filteredPosts[j]=[];
                        }
                        var date = new Date(posts[i].created_at);
                        date = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) +
                            "-" + (date.getMonth() <10 ? '0' +date.getMonth() : date.getMonth())  +
                            "-" + date.getFullYear();

                        $scope.filteredPosts[j][k]= posts[i];
                        $scope.filteredPosts[j][k].created_at = date;
                        k++;
                    }
                }
            })

        
        
        

        $scope.$watch("currentPage + numPerPage", function() {
            var begin = (($scope.currentPage - 1) * $scope.numPerPage)
                , end = begin + $scope.numPerPage;
            var posts = $scope.posts.slice(begin, end);
            var j=-1;
            var k=0;
            for (var i=0;i<posts.length;i++) {
                if (i % 3 == 0) {
                    j++;
                    k=0;
                    $scope.filteredPosts[j]=[];
                }
                var date = new Date(posts[i].created_at);
                date = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) +
                    "-" + (date.getMonth() <10 ? '0' +date.getMonth() : date.getMonth())  +
                    "-" + date.getFullYear();

                $scope.filteredPosts[j][k]= posts[i];
                $scope.filteredPosts[j][k].created_at = date;
                k++;
            }
        });
    }]);
