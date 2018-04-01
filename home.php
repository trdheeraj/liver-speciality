
<!doctype html>
<html ng-app="app" ng-controller="getBlogController" ng-init="getBlogs();" ng-cloak>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liver India</title>
    <!-- font -->
    <link rel="icon" href="img/liver_logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.min.css" rel='stylesheet' type='text/css' />
    <link href="css/swiper.min.css" rel='stylesheet' type='text/css' />
    <!-- my styles -->
    <link href="css/alert_plug.css" rel="stylesheet">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/responsive.css" rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script type="text/javascript" src="js/angular-ckeditor.js"></script>
    <script type="text/javascript" src="js/angular/app.js"></script>
    <script type="text/javascript" src="js/angular/controller/login.js"></script>
    <script type="text/javascript" src="js/angular/controller/home.js"></script>

</head>

<body>

    <!-- top head section -->

    <div class="top-head-section">
        <div class="top-head-section-inner col-90">
            <ul class="ul-left">
                <li><a href="#">CLINIC INFORMATION</a></li>
                <li><a href="#">GENERAL ENQUIRIES</a></li>
            </ul>
            <ul class="ul-right">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- top head section -->

    <!-- nav header section -->
    <!-- Collect the nav links, forms, and other content for toggling -->
      <nav class="navbar navbar-default nav-head-banner" role="navigation">
        <div class="col-90">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand pull-left"><a href="home.php"><img src="img/liver_logo.png"></a></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse no-padding" id="navbar-brand-centered">
          <ul class="nav navbar-nav navbar-right">
               <li ng-class="{ active: isActive('/home')}"><a href="home.php">Home</a></li>
               <li ng-class="{ active: isActive('/blog')}"><a href="blog.php">Blog</a></li>
               <li ng-class="{ active: isActive('/diseases')}"><a href="diseases.php">Diseases</a></li>
               <li ng-class="{ active: isActive('/about')}"><a href="about.php">About Us</a></li>
               <li ng-class="{ active: isActive('/contact')}"><a href="contact.php">Contact Us</a></li>
              <!-- <li ng-class="{ active: isActive('/website/login')}"><a href="/website/login">Login</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- nav header section end -->
    <!-- banner section -->

    <div class="banner-section">

        <div id="myCarousel" class="my-carousel carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/background-banner.png" alt="banner1">
                </div>

                <div class="item">
                    <img src="img/background-banner.png" alt="banner1">
                </div>

                <div class="item">
                    <img src="img/background-banner.png" alt="banner1">
                </div>
            </div>
            <div class="banner-content">
                <div class="col-90 ">
                    <div class="banner-inner">
                        <h1>LIVER INDIA</h1>
                        <label class="head-trail">By Renowned Liver Transplant Surgeon<span> Dr.M.R.Rajasekar </span></label>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
          </a>
          <a href="#" class="down-arrow"><img src="img/down-arrow.png"></a>

      </div>
  </div>

  <!-- banner section end -->

  <!--**** service section *******-->

  <section class="service">
    <div class="col-90">
        <div class="header-section">
            <h2 class="header">Services</h2>
        </div>
        <div class="common-div">
            <div class="col-md-3 no-padding">
                <div class="blue-div-1 center">
                    <img src="img/icon-1.png" class="img-responsive center-block">
                    <h3>Liver Transplantation</h3>
                    <p>The entire diseased liver is surgically removed and a healthy liver or part of the liver is surgically
                    implanted in its place.</p>
                </div>
            </div>
            <div class="col-md-3 no-padding">
                <div class="blue-div-2 center">
                    <img src="img/icon-2.png" class="img-responsive center-block">
                    <h3>Kidney Transplantation</h3>
                    <p>We provide a comprehensive array of services that include transplantation across HLA tissue type
                    and ABO blood group.</p>
                </div>
            </div>
            <div class="col-md-3 no-padding">
                <div class="blue-div-3 center">
                    <img src="img/icon-3.png" class="img-responsive center-block">
                    <h3>Pancreas Transplantation</h3>
                    <p>The operation may take four to six hours. The surgeon makes an incision down the right side or
                    centre of the abdomen.</p>
                </div>
            </div>
            <div class="col-md-3 no-padding">
                <div class="blue-div-4 center">
                    <img src="img/icon-4.png" class="img-responsive center-block">
                    <h3>GI surgeries</h3>
                    <p>We have broad experience and perform a large number of complex procedures. This experience helps
                    make treating these conditions easier and safer for patients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--****** service section end ******-->

<!--**** about section *******-->

<section class="about">
    <div class="col-90">
        <div class="header-section">
            <h2 class="header">About Us</h2>
        </div>
        <div class="common-div">
            <div class="col-md-6 no-padding">
                <div class="about-left">
                    <img src="img/doctor.png">
                </div>
            </div>
            <div class="col-md-6 no-padding">
                <div class="about-right">
                    <h2 class="header">About Us</h2>
                    <label>Dr.M.R.Rajasekar MS, FRCS (UK), MD (UK), Transplant Fellow (USA)</label>
                    <p>His fascination for liver transplantation started during his MBBS and MS training in Madras Medical
                        College in Prof N Rangabhashyam’s unit and fueled by the work of Prof. Thomas Starzl, the
                        father of liver transplantation. After training in Transplantation in the United Kingdom
                    and the University of Chicago Hospitals in the US, wanting to .....</p>
                    <a href="about.php" class="read-more"><u>Read more</u></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--**** about section *******-->


<!--**** blog section *******-->

<section  class="blog" >
    <div class="col-90">
        <div class="header-section">
            <h2 class="header">Blog</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
            of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <a href="blog.php"><button type="button" class="my-button">View More</button></a>
        </div>
        <div class="common-div row ">
            <div class="swiper-container custom-swiper-container">
              <div class="swiper-wrapper">
                <div class="col-md-4 ng-cloak swiper-slide" ng-cloak  ng-repeat="data in datas" >
                    <a href="viewblog.php" ng-click="viewData(data._id)" class="read-more-blog">
                        <div class="blog-card">
                            <div class="mainlanding_blog_img landing_blog_img">
                                <img src="http://13.126.255.149:8000/{{data.filePath}}" alt="{{data.title}}">
                            </div>
                            <div class="blog-content ">
                                <h2>{{data.title}}</h2>
                                <p class=" content_alignmnet home_blog_para" ng-bind-html="data.details | unsafe">{{data.details}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--**** blog section end *******-->


<!--**** contact section *******-->

<section class="contact">
    <div class="header-section">
        <h2 class="header">Contact Us</h2>
    </div>
    <div class="common-div contact-bg">
        <div class="col-90">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-contact row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="Email Id">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12"><button type="button" class="my-button">Submit</button></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-contact">
                        <img src="img/doctor-contact.png" class="img-responsive center-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--**** contact section  end *******-->


<!--**** footer section *******-->

<section class="footer">
    <div class="col-90">
        <div class="row">
             <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <label>Contact Us</label>
                <p class="contac-dt">Dr. M.R RAJASEKAR</br>
        ROOM-10, OPD COMPLEX</br>
        VIJAYA HEALTH CENTER</br>
        NO: 323, NSK SALAI</br>
        VADAPALANI</br>
        CHENNAI- 600026</br>
        (9 AM TO 1 PM; Monday to Saturday)</br>
        TEL: <a href="tel:9677292848">9677292848</a>
        </p>
            </div>
           
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <label>Liver India</label>
                <ul>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="service.php">Service</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="#">Uncategorized</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <label>Liver India</label>
                  <ul class="liver-foot">
                  <li><a href="service.php">Transplant</a></li>
                  <li><a href="#">Featured</a></li>
                  <li><a href="#">News</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="footer-bottom">
      <a href="#" class="link">www.liverindia.org</a>
      <a href="#" class="fb"><img src="img/fb-foot.png"></a>
      <a href="#" class="fb"><img src="img/li-foot.png"></a>
</section>

<!--**** footer section end *******-->
<script>
    ! function () {
        var t;
        if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void(window
            .console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !
            0,
            t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page",
            "hide", "off", "on"
            ],
            t.factory = function (e) {
                return function () {
                    var n;
                    return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n),
                    t;
                };
            }, t.methods.forEach(function (e) {
                t[e] = t.factory(e);
            }), t.load = function (t) {
                var e, n, o, i;
                e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src =
                "https://js.driftt.com/include/" + i + "/" + t + ".js",
                n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
            });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('8t2gfn2upsi9');
    </script>
    <!-- bootstrap script -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <!-- my script -->
    <script src="js/script.js"></script>
    <script>
    </script>
</body>

</html>