app.controller('getBlogController', ['$scope','$http','$timeout','$sce', function ($scope, $http, $timeout,$sce) {
	$scope.getBlogs = function () {
		$http({
			method: 'POST',
			url: __appurl + "getBlog",
			headers: {
				'Content-Type': 'application/json'
			}
		})
		.success(function (data) {
			$scope.datas = data.docsBlog;
			setTimeout(function(){
				var swiper = new Swiper('.custom-swiper-container', {
					autoplay: 5000,
					slidesPerView: 3,
					spaceBetween: 30,
					slidesPerGroup: 3,
					loop: true,
					loopFillGroupWithBlank: true,
					breakpoints: {
						320: {
							slidesPerView: 1,
							spaceBetween: 10
						},
						480: {
							slidesPerView: 1,
							spaceBetween: 20
						},
						640: {
							slidesPerView: 2,
							spaceBetween: 20
						}
					}
				});
			},500)
		})
		.error(function (err) {
			console.log(err)
		})
	}
//getBlogsOwn
$scope.getBlogsOwn = function () {
	$http({
		method: 'POST',
		url: __appurl + "getBlogsOwn",
		headers: {
			'Content-Type': 'application/json'
		}
	})
	.success(function (data) {
			$scope.datas = data.docsBlog;
			
		})
	.error(function (err) {
		console.log(err)
	})
}
	//endBlogsOwn
	$scope.viewData = (id) => {
		localStorage.removeItem('viewBlog')
		localStorage.setItem("viewBlog", id);
	}
	$scope.getUpdateData = () => {
		var Id = localStorage.getItem("viewBlog");
		
		$http({
			method: 'POST',
			url: __appurl + `editBlog/${localStorage.getItem('viewBlog')}`,
			data: {Id: Id},
			headers: {
				"Content-Type": "application/json"
			}
		})
		.success(function (data) {
			console.log('YR^&%&', data)
			$scope.blogRetrieved = data.data;
			
			function formattedDate(dt) {
				let d = new Date(dt);
				let month = String(d.getMonth() + 1);
				let day = String(d.getDate());
				const year = String(d.getFullYear());
				if (month.length < 2) month = '0' + month;
				if (day.length < 2) day = '0' + day;
				return `${day}/${month}/${year}`;
			}
			let date = formattedDate($scope.blogRetrieved.createdOn);
			$scope.blogRetrieved.createdOn = new Date($scope.blogRetrieved.createdOn);
		})
		.error(function (err) {
			console.log("Error: ", err)
		})
	}
}])
app.filter('unsafe', function($sce) { return $sce.trustAsHtml; });