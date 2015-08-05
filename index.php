<!DOCTYPE html>
<html ng-app="store">
<head>
	<title>Angular Js Making It</title>
	<script src="angular.min.js"></script>
	<script src="angular-route.min.js"></script>
	<script src="app.js"></script>
	<link rel="stylesheet" href="bootstrap-theme.min.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body ng-controller='StoreController as store'>
	

<a href="javascript:" onclick="window.open('https://www.google.co.in');" target="_blank">Sample Code</a>

	<ul>
		<li>
			<a href="#">Home</a>
			<a href="#about">About</a>
			<a href="#contact">Contact</a>
		</li>
		
	</ul>
	Search: <input ng-model="query">

	<select ng-model="prop">
		<option value="name">Alphabetical</option>
		<option value="age">Newest</option>
	</select>
		
<div ng-view></div>
	
<li ng-repeat="phone in phones | filter:query | orderBy: prop">
			<h3><img ng-src="{{phone.imageUrl}}" style="width:80px">{{phone.id}}</h3>
			
		</li>

	{{query}}
</body>
</html>