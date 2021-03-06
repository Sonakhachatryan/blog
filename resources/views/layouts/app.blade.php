<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Animus A Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <link href="{{ url('administration/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="{{ url('administration/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            size_li = $("#myList li").size();
            x=3;
            $('#myList li:lt('+x+')').show();
            $('#loadMore').click(function () {
                x= (x+1 <= size_li) ? x+1 : size_li;
                $('#myList li:lt('+x+')').show();
            });
            $('#showLess').click(function () {
                x=(x-1<0) ? 1 : x-1;
                $('#myList li').not(':lt('+x+')').hide();
            });
        });
    </script>

</head>
<body  ng-app="myApp">
<!-- header -->
<div class="banner">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="images/test/images/logo.png" class="img-responsive" alt="" /></a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#"><i class="fb"> </i></a></li>
                    <li><a href="#"><i class="twt"> </i></a></li>
                    <li>
                        <div class="search2">
                            <form>
                                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                                <input type="submit" value="">
                            </form>
                        </div></li>
                    <div class="clearfix"></div>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-15">
                <li class="active"><a href="index.html">HOME</a></li>
                <li><a href="about.html" data-hover="ABOUT">ABOUT</a></li>
                <li><a href="photos.html" data-hover="PHOTOS">PHOTOS</a></li>
                <li><a href="404.html" data-hover="ARCHIVES">ARCHIVES</a></li>
                <li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>

        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->
    </div>
</div>
<!-- header -->

<!-- content -->

<ng-view></ng-view>
<!-- content -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="ham"></i>
            </div>
            <div class="top2">
                <h6>Copyrights © 2015 Graphic</h6>
                <p>All rights reserved</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="men"></i>
            </div>
            <div class="top2">
                <h6>Template by: </h6>
                <p><a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="app"></i>
            </div>
            <div class="top2">
                <h6>Images From: </h6>
                <p><a href="#"> www.wallcoo.net</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 copy">
            <div class="top1">
                <i class="lik"></i>
            </div>
            <div class="top2">
                <h6>Website </h6>
                <p><a href="#"> www.yourblog.com</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- footer -->
<script src="{{ url('bower_components/angular/angular.js') }}"></script>
<script src="{{ url('bower_components/angular-bootstrap/ui-bootstrap.min.js') }}"></script>
{{--<script src="{{ url('bower_components/angular-route/angular-route.js') }}"></script>--}}
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.min.js"></script>
<script src="/angular/app.js"></script>
<script src="{{ url('angular/models/DashboardModel.js') }}"></script>
<script src="{{ url('angular/controllers/DashboardController.js') }}"></script>
<script src="{{ url('angular/controllers/PostController.js') }}"></script>

</body>


</html>