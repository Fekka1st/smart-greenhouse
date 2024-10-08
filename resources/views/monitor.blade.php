<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenhouse Monitoring</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f0f0;
        }
        h1 {
            color: #4CAF50;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
        .sensor-data {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h1>Greenhouse Monitoring</h1>
    <p>Here, you'll see live data from the greenhouse sensors.</p>
    
    <div class="sensor-data">
        <h2>Current Sensor Readings</h2>
        @if ($sensorData)
            <p>Temperature: {{ $sensorData->temperature }}°C</p>
            <p>Humidity: {{ $sensorData->humidity }}%</p>
            <p>Light Intensity: {{ $sensorData->light_intensity }} lux</p>
        @else
            <p>No sensor data available.</p>
        @endif
    </div>

    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
