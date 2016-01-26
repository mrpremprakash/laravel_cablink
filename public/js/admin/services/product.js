myDemoApp.service('productService', function($http, $q) {
    var categories = [];
    var deferred = $q.defer();
    this.saveProduct = function(data) {
        return $http({
            method  : 'POST',
            url     : 'admin/product/add',
            data    : data.join('&'),  // pass in data as strings
            headers : {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}  // set the headers so angular passing info as form data (not request payload)
        }).success(function(data) {
            return data;
        });
    };
    this.getProducts = function() {
        return $http.get('admin/products/list?limit=10')
            .then(function (response) {
                deferred.resolve(response.data.data);
                //categories = response.data;
                return deferred.promise;
            }, function (response) {
                console.log(response);
            });
    };
    this.fetch = function($scope) {
        $http
            .get("admin/products/list?term=" + $scope.search)
            .success(
                function(response){
                    deferred.resolve(response.data);
                    $scope.products = response.data;
                    return deferred.promise;
                }
            );
    }
});