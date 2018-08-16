<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" ng-app="LaravelCRUD">
<head>
	<title>Test Angular</title>
	<script src="/js/angular/angular.js"></script>
	<script src="/js/angular/angular-route.js"></script>
	
	<script src="/js/main.js"></script>
	<script src="/js/controllers.js"></script>
	<script src="/js/factories.js"></script>
</head>
@verbatim
<body ng-controller="testController">
 	

 	<table>
 		<thead>
 			<tr>
 				<th>id</th>
 				<th>nama</th>
 				<th>kota</th>
 				<th>kontak</th>
 			</tr>
 		</thead>
 		<tbody >
 			<input ng-model="just" type="text" name="">
 			<tr ng-repeat="test in tests | filter : hasil | orderBy : 'id'" ng-class="$even ? 'even' : 'odd'">
 				<td >{{ test.id }}</td>
 				<td >{{ test.nama }}</td>
 				<td >{{ test.kota }}</td>
 				<td >{{ test.kontak }}</td>
 			</tr>
 		</tbody>
 	</table>


 	<script>

 		var options = {
        baseUrl : '<?php echo str_replace('public', '', url('')) ?>',
        siteUrl : '<?php echo url('') ?>'
    };
 	</script>

</body>
@endverbatim
</html>