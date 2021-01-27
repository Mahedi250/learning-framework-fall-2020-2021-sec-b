<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Name</td>
			<td>Dept</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['userId']}}</td>
				<td>{{$students[$i]['username']}}</td>
				<td>{{$students[$i]['name']}}</td>
				<td>{{$students[$i]['dept']}}</td>
				<td>
					<a href="{{route('home.edit', $students[$i]['userId'])}}">Edit </a> |
					<a href="{{route('home.show', $students[$i]['userId'])}}">Details </a> |
					<a href="/delete/{{$students[$i]['userId']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>