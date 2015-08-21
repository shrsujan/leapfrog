<table class="table table-striped table-bordered table-hover">
	<label><h3>Student Table</h3></label>
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Status</td>
	</tr>
	<tr ng-repeat="std in studentList">
		<td>{{std.id}}</td>
		<td><a href="#/student/edit/{{std.id}}">{{std.firstName}} {{std.lastName}}</a></td>
		<td>{{std.email}}</td>
		<td>{{std.status}}</td>
	</tr>
</table>