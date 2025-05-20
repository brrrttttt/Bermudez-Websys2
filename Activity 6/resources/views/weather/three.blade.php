<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather in 3 Cities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }
        .card {
            width: 32%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Weather in 3 Cities</h1>
    <div class="row">
        @foreach($weatherData as $data)
            <div class="card">
                <h2>{{ $data['city'] }}</h2>
                @if(isset($data['error']))
                    <p>{{ $data['error'] }}</p>
                @else
                    <p><strong>Temperature:</strong> {{ $data['temperature'] }} °C</p>
                    <p><strong>Description:</strong> {{ $data['description'] }}</p>
                    <p><strong>Humidity:</strong> {{ $data['humidity'] }}%</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
