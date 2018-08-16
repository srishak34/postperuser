angular
	.module('factories', [])
	.factory('testsFactories', function($http){
		return {
			fetch: function(){
				return $http.get(options.siteUrl + '/test');
			}
		};
	});