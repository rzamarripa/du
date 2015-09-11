var app= angular.module('passa',[]);
app.controller('Toptenproductos', ['$scope', function ($scope) {
	window.scope = $scope;

	console.log($scope);
	
	$scope.cambio = function (item, e) {
		alert("cambié");
	}

		
}]);
