angular
	.module('controllers', [])
	.controller('testController', function($scope, testsFactories){
		testsFactories.fetch().then(
			function(response) {
		    $scope.tests = response.data;
		    console.log('Items ', $scope.tests);
		  }, 
		  	function(response) {
		    console.log(response, 'Why?');
		  });
	});
		