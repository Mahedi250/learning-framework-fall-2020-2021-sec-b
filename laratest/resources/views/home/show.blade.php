<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<img src="{{asset('upload/$profile_img')}}">>
		<table border="1">
			<tr>
				<td>Username</td>
				<td>{{$username}}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>{{$password}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Cgpa</td>
				<td>{{$cgpa}}</td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td>{{$dept}}</td>
			</tr>
			<tr>
				<td>type</td>
				<td>{{$type}}</td>
			</tr>
		</table>
		
</body>
</html>