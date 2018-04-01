app.controller('loginController',['$scope','$http',function($scope,$http){
	var token = localStorage.getItem("token");
	$scope.userLogin = function(isValid){        
		if(isValid == true){
			$http({
				method  : 'POST',
				url     : __appurl + "login",
				data    : { password:$scope.login.pwd, email:$scope.login.email1 },
					headers : { 'Content-Type': 'application/json' }  
				})
			.success(function(data) {
				if(data.status == true){
					notif({
						type: "success",
						msg: data.message,
						position: "right"
					});
					
					var token = localStorage.setItem("token", data.token);
					window.location.href = 'recentPost'
				}else{
					notif({
						type: "failure",
						msg: data.message,
						position: "right"
					});
					console.log("Status:" + data.status);
					console.log(data)
				}
			})
			.error( function (data){
				console.log(data) ;
			});
		}
	},
	
	$scope.passwordForm = function(isValid){
		console.log("<-->", isValid);
		if(isValid == true){
			$http({
				method: 'POST',
				url: __appurl+"changePassword",
				data: { token: token, oldPassword: $scope.passForm.oldPass, newPassword: $scope.passForm.newPass },
				headers: {'Content-Type': 'application/json'}
			})
			.success(function(data){
				notif({
					type: "success",
					msg: data.message,
					position: "right"
				});
				console.log("DATA:",data)
			})
			.error(function(err){
				notif({
					type: "success",
					msg: data.message,
					position: "right"
				});
				console.log("Error: ", err)
			})
		}
	}
}]);

app.controller('getBlogController',['$scope','$http',function($scope,$http){
	var token = localStorage.getItem("token");
	$scope.logout = function(){
		console(token);
		//localstorage.destroy();
		//$location.path('/home');	
	}	
}]);	