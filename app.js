//Below is a module
(function (){
	var app = angular.module('store', ['ngRoute']);
	app.controller('StoreController',function($scope,$http){
		 //$scope.phones = phones;
		 $scope.name = "world";
		 $scope.prop = 'age';

		 $http.get('phones.json').success(function(data){
		 	$scope.phones = data;
		 });
	});

	app.config(function($routeProvider){
		$routeProvider
		
		.when('/',{
			templateUrl: 'home.php'
		})

		.when('/about',{
			templateUrl: 'about.php'
		})
		.when('/contact',{
			templateUrl: 'contact.php'
		});

	});

	var phones = [
		    {'name': 'Nexus S',
		     'snippet': 'Fast just got faster with Nexus S.',
		 	'age':'1'},
		    {'name': 'Motorola XOOM™ with Wi-Fi',
		     'snippet': 'The Next, Next Generation tablet.',
		 	'age':'4'},
		    {'name': 'MOTOROLA XOOM™',
		     'snippet': 'The Next, Next Generation tablet.',
		 	'age':'3'}
		  ];
})();