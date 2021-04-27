<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
</head>
<body>
    <div>
        <h1><a href="{{route('todos.index')}}">Todo App</a></h1>
        @yield('content')
    </div>


    @yield('footer')
</body>
</html>