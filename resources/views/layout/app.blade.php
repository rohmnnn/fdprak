<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app</title>
</head>
<body>
    <h2>Ini header</h2>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
      </ul>

      @yield('content')

      <h2>ini footer</h2>
    
</body>
</html>