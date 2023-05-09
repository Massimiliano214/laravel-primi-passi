<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                @foreach ($nawOptions as $nawOption)  
                    <li><a href="{{route($nawOption)}}">{{$nawOption}}</a></li>              
                @endforeach
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h1>hello World</h1>

            <h2>Dinamic: {{ $dinamicText }}</h2>
        </div>
    </main>
</body>
</html>