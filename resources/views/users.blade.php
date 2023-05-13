<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>


<div class="container mt-5">
    <div>
        <h2 class='m-3'>USERS</h2>
    </div>
    <table class="table table-bordered ">
    <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PHONE</td>
            <td>EMAIL</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


</body>
</html>
