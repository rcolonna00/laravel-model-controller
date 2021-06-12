<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista film da stampare</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <div>
                    Title:{{ $movie->title }}                    
                </div>
                <div>
                    Original Title{{ $movie->original_title }}
                </div>
                <div>
                    Nations{{ ucfirst($movie->nationality) }}
                </div>
            </li>
        @endforeach
    </ul>

</body>
</html>