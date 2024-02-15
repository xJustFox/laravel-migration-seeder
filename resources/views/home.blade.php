<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container-lg py-5">
        <table class="table table-bordered border-black">
            <thead>
              <tr>
                <th scope="col">Agenzia</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Data di partenza</th>
                <th scope="col">Data di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozza</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->agency}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_date}}</td>
                        <td>{{$train->arrival_date}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->number_carriages}}</td>
                        <td>{{$train->in_time}}</td>
                        <td>{{$train->deleted}}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>