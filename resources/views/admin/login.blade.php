<!DOCTYPE html>
<html lang="en" ng-app="myDemoApp">
<head>
    <meta charset="UTF-8">
    <title ng-bind="'myApp &mdash; ' + title">myApp</title>
    <base href="/">
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/startmin.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/authenty.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/preview.css')}}" rel="stylesheet">
</head>
<body>
<section id="authenty_preview">
    <section id="signin_main" class="authenty signin-main">
        <div class="section-content">
            <div class="wrap">
                <div class="container">
                    <div class="form-wrap">
                        <div class="row">
                            <div class="title animated fadeInDown" data-animation="fadeInDown" data-animation-delay=".8s" style="animation-delay: 0.8s;">
                                <h1>LOGIN</h1>
                                <h5>All fields are required</h5>
                            </div>
                            <div id="form_1" >
                                <div class="form-header">
                                    <i class="fa fa-user"></i>
                                </div>
                                <form name="loginForm" ng-submit="submitForm(loginForm.$valid)">
                                    <div class="form-main">
                                        <div class="form-group">
                                            <input type="text" ng-model="name" name="name" class="form-control" placeholder="Username" novalidate required>
                                            <p ng-show="loginForm.name.$invalid && !loginForm.name.$pristine" class="help-block">
                                                Your name is required.
                                            </p>
                                            <input type="password" class="form-control" placeholder="Password" novalidate>
                                        </div>
                                        <button id="signIn_1" ng-disabled="loginForm.$invalid" type="submit" class="btn btn-block signin">Sign In</button>
                                    </div>
                                    <div class="form-footer">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <i class="fa fa-unlock-alt"></i>
                                                <a href="#password_recovery" id="forgot_from_1">Forgot password?</a>
                                            </div>
                                            <div class="col-xs-5">
                                                <i class="fa fa-check"></i>
                                                <a href="#signup_window" id="signup_from_1">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</body>
</html>


