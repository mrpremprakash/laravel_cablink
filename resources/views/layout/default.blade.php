<!DOCTYPE html>
<html lang="en" ng-app="myDemoApp">
<head>
    <meta charset="UTF-8">
    <title ng-bind="'myApp &mdash; ' + title">myApp</title>
    <base href="<% URL::asset('/') %>">
    <link href="<% URL::asset('css/common.css') %>" rel="stylesheet">

    <link href="<% URL::asset('css/bootstrap.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/startmin.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/font-awesome.min.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/authenty.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/preview.css') %>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Startmin</a>
    </div>
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav in" id="side-menu">
                <li>
                    <a href="admin/dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li class="">
                    <a href="admin/categories"><i class="fa fa-bar-chart-o fa-fw"></i> Categories </a>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="admin/products"><i class="fa fa-table fa-fw"></i> Products </a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Orders </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<div ui-view="">
    @yield('content')

</div>
<script src="<% URL::asset('js/angular.min.js') %>"></script>
<script src="<% URL::asset('js/angular-ui-router.min.js') %>"></script>
<script src="<% URL::asset('js/jquery-1.12.0.min.js') %>"></script>
<script src="<% URL::asset('js/admin/app.js') %>"></script>
<script src="<% URL::asset('js/admin/controllers/category.js') %>"></script>
<script src="<% URL::asset('js/admin/controllers/product.js') %>"></script>
<script src="<% URL::asset('js/admin/services/category.js') %>"></script>
<script src="<% URL::asset('js/admin/services/product.js') %>"></script>
<script src="<% URL::asset('js/admin/filters/filters.js') %>"></script>
<script src="<% URL::asset('js/admin/directives/directives.js') %>"></script>
<script src="<% URL::asset('js/admin/dropzone.js') %>"></script>
</body>
</html>