<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Daniel Moreno González">
        <title>YOU ROCK!</title>
    </head>
    <body>
        
        @foreach ($categories as $category)
            <p>Categoría: {{ $category->name }}</p>
        @endforeach
        
    </body>
</html>