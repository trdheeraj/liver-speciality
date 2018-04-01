
<!doctype html>
<html lang="en-US" ng-app="app" ng-controller="getBlogController" ng-init="getUpdateData()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liver India</title>
      <link rel="icon" href="img/liver_logo.png">
    <!-- font -->
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

    <!--**** blog section *******-->

    <section  class="blog" >
        <div class="col-90">
            <div class="header-section">
                <div class="row" my-directive >
                    <div class="col-md-12 ng-cloak" ng-cloak   >
                      <h1>{{blogRetrieved.title}}</h1>
                      <p><span class="label label-success">Category: {{blogRetrieved.category}}</span>
                      </br>
                      </br>
                     <span class="label label-warning">Tags: {{blogRetrieved.tags}}</span>
                 </br>
                 </br>
                     <span class="label label-primary">Created On: {{blogRetrieved.createdOn | date:'MM/dd/yyyy'}}</span></p>
                      </p>
                      <hr> </hr>
                      <div class="landing_blog_img">
                        <img class="view-blog-details" src="http://13.126.255.149:8000/{{blogRetrieved.filePath}}" alt="{{blogRetrieved.title}}">
                    </div>
                </br>
                <div class="">
                    <p class="landing_blog_details" ng-bind-html="blogRetrieved.details | unsafe"></p>
                </div>
                <hr> </hr>
                <h1>Author Details</h1>
                <div class="blog-author-alignment">
                    <p class="landing_blog_details"><b>Name:</b> </p>
                    <p class="landing_blog_details">{{blogRetrieved.author}}</p>
                    <p class="landing_blog_details"><b>Bio:</b></p>
                    <div ng-bind-html="blogRetrieved.authorBio | unsafe"><b>Bio:</b>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--**** blog section end *******-->
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
</body>

</html>