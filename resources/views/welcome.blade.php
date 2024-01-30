<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center my-3">Treni in partenza nel giorno 2024-01-30</h1>
    <ul>
        @foreach ($trains as $train)
            <li class="text-center">
               data di partenza :  {{ $train['data_di_partenza'] }}
            </li>
        @endforeach
    </ul>
</body>

</html>
