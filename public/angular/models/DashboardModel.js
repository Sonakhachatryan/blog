app.factory('DashboardModel', ['$http', function ($http) {
    return {

        getAddingProducts: function(package_id){
            return $http({
                method: "get",
                url: "caterer/product/package/"+ package_id +"/edit"
            });
        },

        updateProductCount: function (data) {
            return $http({
                data: data,
                method: "post",
                url: "caterer/product/package/editcount"
            });
        },

        

    };
}]);