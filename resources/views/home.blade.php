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

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">departure station</th>
                                    <th scope="col">departure time </th>
                                    <th scope="col">arrival station</th>
                                    <th scope="col">arrival time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($filtered_trains as $train)
                                    <tr>
                                        <th scope="row">{{ $train->train_code }}</th>
                                        <td>{{ $train->departure_station }}</td>
                                        <td>{{ $train->departure_time }}</td>
                                        <td>{{ $train->arrival_station }}</td>
                                        <td>{{ $train->arrival_time }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
