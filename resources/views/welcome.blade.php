<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>
    <p>
        <div>
            <button class="btn btn-primary" onclick="location.href='{{action('HomeController@postBackup')}}'">BACKUP</button>
        </div>
        <div>
            @isset($resultString) <p> {{ $resultString  }}</p> @endisset
        </div>
    </p>
    </body>
</html>
