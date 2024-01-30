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
    @foreach ($trains as $train)
        <ul>
    
            <li>azienda:
                <div>
                    {{$train["azienda"]}}
                </div>     
            </li>
            <li>stazione di partenza:
                <div>
                    {{$train["stazione_di_partenza"]}}
                </div>  
            </li>
            <li>stazione di arrivo:
                <div>
                    {{$train["stazione_di_arrivo"]}}
                </div>  
            </li>
            <li>orario di partenza:
                <div>
                    {{$train["orario_di_partenza"]}}
                </div>  
            </li>
            <li>orrio di arrivo
                <div>
                    {{$train["orario_di_arrivo"]}}
                </div>  
            </li>
            <li>codice treno
                <div>
                    {{$train["codice_treno"]}}
                </div>  
            </li>
            <li>numero carrozze
                <div>
                    {{$train["Numero_carrozze"]}}
                </div>  
            </li>
            <li>data di partenza
                <div>
                    {{$train["data_di_partenza"]}}
                </div>  
            </li>
        </ul>
        @endforeach
        {{-- <div>
                        {{ $train['data_di_partenza'] }}
                    </div>
                </span>
                <span>
                    azienda: {{ $train['azienda'] }}
                </span> --}}
</body>

</html>
