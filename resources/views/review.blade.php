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
        <h2>{{$name}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium ullam beatae nihil sit, odit, placeat neque nam expedita eum molestiae reiciendis doloribus sint tempore quae facilis optio? Possimus, odio!</p>
    </main>
</body>
</html>