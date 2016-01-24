cablinkApp.controller('productListCtrl', function($scope, $http, productService) {
    $scope.products = [];

    productService.getProducts().then(function(data) {
        $scope.products = data;
    });
});