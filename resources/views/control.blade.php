<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenhouse Control</title>
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
        form {
            margin-top: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Greenhouse Control</h1>
    <p>Here, you can control the temperature, water, and light settings of the greenhouse.</p>
    
    @if (session('message'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('home') }}">Back to Home</a>

    <form action="/control" method="POST">
        @csrf
        <label for="temperature">Set Temperature:</label>
        <input type="number" id="temperature" name="temperature" required>
        
        <label for="humidity">Set Humidity:</label>
        <input type="number" id="humidity" name="humidity" required>
        
        <label for="light">Set Light Intensity:</label>
        <input type="number" id="light" name="light" required>
        
        <button type="submit">Update Settings</button>
    </form>
</body>
</html>
