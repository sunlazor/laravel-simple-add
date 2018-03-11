<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Users list</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <header>
        Users list
    </header>
    <h1>
        Users count: {{ count($users) }}
    </h1>

    <br>

    @foreach ($users as $user)
    <li> {{ $user->name }} </li>
    @endforeach

    <br>

    <!-- <form method=POST action="/users">
        <input name="name" placeholder="Tema" />
        <input type="submit" value="Add" />
    </form> -->
</body>
</html>