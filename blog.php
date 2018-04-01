
<!doctype html>
<html ng-app="app" ng-controller="getBlogController" ng-init="getBlogsOwn();" ng-cloak>
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
		<img src="img/blog-banner.png">
		<h2>Blog</h2>
	</div>
	<div class="common-padd">
		<!--<h2 class="title">Subscribe to our blog</h2>
		<div class="blog-input-div center">
			<input type="text" class="form-control" id="usr" placeholder="Enter your mailid">
			<button type="button" class="blog-btn">Submit</button>
		</div>-->
		<div class="col-90 blog-main">
			<div class="blog-sec row"  ng-cloak  ng-repeat="data in datas">
				<div class="col-md-6">
					<div class="blog-sec-content">
						<h3>{{data.title}}</h3>
						<p class=""><span class="label label-primary">Posted On: {{data.createdOn  | date:'MM/dd/yyyy'}}</span></p>
						<p class=""><span class="label label-warning">Category: {{data.category}}</span></p>
						<p class=""><span class="label label-success">Tags: {{data.tags}}</span></p>
						<p class=" content_alignmnet home_blog_para" ng-bind-html="data.details | unsafe">{{data.details}}
						</p>
						<a href="viewblog.php" ng-click="viewData(data._id)" class="read-more-blog">Read More</a> 
					</div>
				</div>
				<div class="col-md-6">
					<div class="blog-sec-img">
						<img src="http://13.126.255.149:8000/{{data.filePath}}" alt="{{data.title}}">
					</div>
				</div>
			</div>
			<div class="center more-read">
				<a href="blogArchive.php" class="blog-btn">View All Blogs</a>
			</div>
		</div>
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
