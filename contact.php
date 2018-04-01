
<!doctype html>
<html>
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
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/responsive.css" rel='stylesheet' type='text/css' />
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

<div class="banner">
    <img src="img/contact-banner.png">
    <h2>Contact Us</h2>
</div>
<div class="col-md-4 col-md-offset-4 common-padd">
    <h2 class="title">Leave Us a Message</h2>
    <form class="contact-form">
        <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="email" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
        </div>
        <div class="form-group">
          <textarea class="form-control" id="comment" placeholder="Message"></textarea>
        </div>
        <button type="button" class="my-button">Send</button>
    </form>
</div>

<!-- banner section end -->




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



<!-- bootstrap script -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<!-- my script -->
<script src="js/script.js"></script>

</body>

</html>
