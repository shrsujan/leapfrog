<html>
<head>
	<title>AngulaJS</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" />
	<script src="assets/js/jquery.min.js"/></script>
	<script src="assets/js/bootstrap.min.js"/></script>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-route.min.js"></script>
</head>
<body ng-app="myapp">
<div class="container">	
	<div ng-controller="StudentController">
	<button class="btn btn-flat btn-sm btn-primary" ng-click="alert_btn()">Click Me</button>

		<div ng-view=""></div>
	</div>
</div>
</body>
<script>
var app = angular.module("myapp",['ngRoute']);

app.config(function($routeProvider){
	$routeProvider.when("/",{
		templateUrl:"partials/student/index.php",
		controller:"StudentController"
	});

	$routeProvider.when("/student/edit/:id",{
		templateUrl:"partials/student/detail.php",
		controller:"StudentController"
	});

});

app.factory("StudentService",function(){
	var output = {};

	output.getAll = function(){
			return [{id:1,
					firstName:'Sujan',
					lastName:'Shrestha',
					email:'shrsujan2007@gmail.com',
					status:true},
					{id:2,
					firstName:'Sujan',
					lastName:'Malakar',
					email:'smsbmalakar@gmail.com',
					status:true},
					{id:3,
					firstName:'Pratish',
					lastName:'Shrestha',
					email:'vanroshr@gmail.com',
					status:true},
					{id:4,
					firstName:'Romit',
					lastName:'Amgai',
					email:'romitamgai@gmail.com',
					status:false}];
	};

	output.getById = function(id){
		var student = null;
		var studentList = getAll();
		for(var i=0;i<=studentList.length;i++){
			if(getAll()[i].id==id){
				student = studentList[i];
				break
			}
		}
		return student;
	};


	return output;
});

app.controller("StudentController",function($scope,StudentService){
	$scope.studentList = StudentService.getAll();
	$scope.alert_btn = function(){
		alert("Hello");
	};

});

app.controller("StudentEditController",function($scope,StudentService){
	$scope.studentList = StudentService.getAll();
});

</script>
</html>