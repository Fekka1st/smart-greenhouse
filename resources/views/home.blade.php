<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Greenhouse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            color: #4CAF50;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* Responsive styles */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            nav {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                margin: 5px 0;
                width: 100%; /* Make links full width on small screens */
                text-align: center;
            }
        }

        /* Flexbox layout for larger screens */
        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Smart Greenhouse System</h1>
    </header>
    <nav>
        <a href="{{ route('monitor') }}">Go to Monitoring</a>
        <a href="{{ route('control') }}">Go to Control</a>
    </nav>
</body>
</html>
