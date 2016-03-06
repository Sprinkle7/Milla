var app = angular.module('app',[]).
	controller('mainpage', function($scope,$http){
	$http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
	// Header of the page in the type content defined...
	$http.get('data/Get_User_Data.all_uploaded.api.php')
		.then(function success(response){
			 $scope.Userdata = response;
			 console.info(response);
		}, function error(error){
			 $scope.Userdata = response;
			 console.info(response);
		});
	// Getting All Data from the Server...
	$scope.SaveUser = function() {
		var request = $http({
		    method: "post",
		    url: "data/Get_User_Data.insert.api.php",
		    data: {
        		username:$scope.Username,
				email   :$scope.Email,
				number  :$scope.Number,
				password:$scope.Password,
		    },
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		}).then(function success(success){
		  console.info(success);
		},function error(response){
		  console.info(response);
		});
	}
	// End Of Save User
	$scope.WhatHappend = function() {
		var request = $http({
		    method: "post",
		    url: "data/Post_Info_Data.insert.api.php",
		    data: {
        		title   :$scope.Title,
				desc    :$scope.desc,
				found   :$scope.found,
				address :$scope.address,
				Long    :$scope.Longi,
				lat     :$scope.Lat,
		    },
		}).then(function success(success){
		  window.location.href="index.php";
		},function error(response){
		  console.info(response);
		});
	}
});