var myDemoApp = angular.module('myDemoApp', ['ui.router']);
myDemoApp.config(['$stateProvider', '$locationProvider', '$httpProvider', function ($stateProvider, $locationProvider, $httpProvider) {
    $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
    var login = {
        title: 'Login',
        url: '/admin',
        templateUrl: 'admin/index'
    },
    dashboard = {
        title: 'Login',
        url: '/admin/dashboard',
        templateUrl: 'admin/dashboard'
    },
    categories = {
        title: 'Categories',
        url: '/admin/categories',
        templateUrl: 'admin/categories',
        controller: 'categoryListCtrl'
    },
    category_add = {
        title: 'Add Category',
        url: '/admin/category/add',
        templateUrl: 'admin/category/add',
        controller: 'categoryAddCtrl'
    },
    products = {
        title: 'Products',
        url: '/admin/products',
        templateUrl: 'admin/products',
        controller: 'productListCtrl'
    },
    product_add = {
        title: 'Add Product',
        url: '/admin/product/add',
        templateUrl: 'admin/product/add',
        controller: 'productAddCtrl'
    },
    otherwise = {
        title: 'Home',
        url: "*path",
        templateUrl: 'admin/dashboard'
    };
    $stateProvider
        .state('login', login)
        .state('dashboard', dashboard)
        .state('categories', categories)
        .state('category_add', category_add)
        .state('products', products)
        .state('product_add', product_add)
        //.state("otherwise", otherwise)
    ;
    $locationProvider.html5Mode(true);
}]);