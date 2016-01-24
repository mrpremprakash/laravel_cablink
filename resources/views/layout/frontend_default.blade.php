<!doctype html>
<html lang="en" ng-app="cablinkApp">
<head>
    <meta charset="utf-8">
    <meta name="content-type" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>... CabLink ...</title>
    <base href="/">
    <link href="<% URL::asset('css/bootstrap.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/startmin.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/font-awesome.min.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/authenty.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/preview.css') %>" rel="stylesheet">

    <link href="<% URL::asset('css/jquery.raty.css') %>" rel="stylesheet">
    <link href="<% URL::asset('css/style.css') %>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section class="wrapper">

    <!--[header]-->
    @include('frontend.header_section')
    <!--[/header]-->

    <!--[content-sect]-->
    <section ui-view="" class="content-sect"></section>

    <!--[/content-sect]-->

    <!--[footer-sect]-->
    @include('frontend.footer_section')
    <!--[/footer-sect]-->


    <!--[login-sect]-->
    <div class="modal fade login">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-header">
                    <div class="title">
                        <h3><span>Login</span></h3>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" name="" value="" class="form-control" placeholder="Enter Your Email Id" />
                        </div>

                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="" value="" class="form-control" placeholder="Enter Your Password" />
                        </div>

                        <div class="form-group clearfix">
                            <button type="submit" name="login" value="" class="btn btn-primary pull-left">Login</button>
                            <a href="javascript:void(0)" class="pull-right forgot-link" data-toggle="modal" data-target=".forgot-sect">Forget Password ?</a>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <h4><a href="signup.html"><i class="fa fa-external-link"></i> New User Signup</a></h4>
                    </div>
                    <div class="social-links">
                        <a href="#" target="_blank"><img src="images/facebook-btn.png" alt="facebook" /></a>
                        <a href="#" target="_blank"><img src="images/google-btn.png" alt="google-plus" /></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--[/login-sect]-->

    <!--[forgot-sect]-->
    <div class="modal fade forgot-sect text-center">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-header">
                    <div class="title">
                        <h3><span>Forgot Password</span></h3>
                        <p>Please enter your email id below. We will send you a link to reset your password.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group form-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" name="" value="" class="form-control" placeholder="Enter Your Email Id" />
                        </div>

                        <div class="form-group clearfix">
                            <button type="submit" name="login" value="" class="btn btn-primary">Send Mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--[/forgot-sect]-->

    <!--[quick-view-details]-->
    <div class="modal fade quick-view">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <!--[prod-dtls]-->
                    <div class="prod-dtls">
                        <div class="clearfix">
                            <!--[product-slider]-->
                            <div class="slider-pro col-sm-4">
                                <!--[product full image]-->
                                <div class="owl-carousel sync1">
                                    <div class="item zoom ex1"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item zoom ex1"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item zoom ex1"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item zoom ex1"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                </div>
                                <!--[/product full image]-->

                                <!--[product thumbnail image]-->
                                <div class="owl-carousel  sync2">
                                    <div class="item"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                    <div class="item"><img src="images/men/product-dt1.jpg" alt="men products"></div>
                                </div>
                                <!--[/product thumbnail image]-->

                            </div>
                            <!--[/product-slider]-->

                            <!--[product-full-dtls]-->
                            <div class="col-sm-8 p45">
                                <h2>Duis non ante ac mi aliquet auctor.</h2>
                                <ul class="reviews">
                                    <li>
                                        <div data-score="3" class="rate"></div>
                                    </li>
                                    <li>5 Reviews</li>
                                    <li><a href="#">Add Your Reviews</a></li>
                                </ul>
                                <div class="avail-sect">
                                    <p><strong>AVAILABILITY : </strong> In Stock 20 Items(2)</p>
                                    <p><del>$800.00</del> <span>$699.00</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <ul class="pro-lists">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Cras sed est non diam scelerisque egestas.</li>
                                    <li>In eu nisl blandit, rhoncus sapien sed, lacinia mi.</li>
                                </ul>
                                <p><strong>Also available in these colors</strong></p>
                                <ul class="avail-color">
                                    <li><a href="#"><img src="images/men/product-dt1.jpg" alt="available" /></a></li>
                                    <li><a href="#"><img src="images/men/product-dt1.jpg" alt="available" /></a></li>
                                    <li><a href="#"><img src="images/men/product-dt1.jpg" alt="available" /></a></li>
                                </ul>
                                <ul class="list-inline size-color">
                                    <li>
                                        <p><strong>Size</strong></p>
                                        <select name="size" class="custom-select">
                                            <option>Select</option>
                                            <option>XXS</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </li>
                                    <li>
                                        <p><strong>Qty</strong></p>
                                        <input type="text" value="" name="qty" class="form-control qty" />
                                    </li>
                                    <li>
                                        <p><strong><i class="fa fa-map-marker"></i> Check Availability at</strong></p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Pincode" aria-describedby="basic-addon2">
                                <span class="input-group-addon">
                                <input type="submit" name="" value="Check" class="btn btn-primary" />
                                </span> </div>
                                        <div class="danger">Invalid Pincode entered!</div>
                                    </li>
                                    <li><a href="#" class="shop-now-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a></li>

                                </ul>
                            </div>
                            <!--[/product-full-dtls]-->

                        </div>

                    </div>
                    <!--[/prod-dtls]-->
                </div>
            </div>
        </div>
    </div>
    <!--[/quick-view-details]-->
</section>


<!--[all-scripts]-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.js"></script>
<script type="text/javascript" src="js/jquery.zoom.js"></script>
<!--<script type="text/javascript" src="js/custom.js"></script>-->

<script type="text/javascript" src="<% URL::asset('angularjs/angular.min.js') %>"></script>
<script type="text/javascript" src="angularjs/angular-ui-router.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/productService.js"></script>
<script type="text/javascript" src="js/product_ctrl.js"></script>

<!--[/all-scripts]-->
</body>
</html>
