<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <style>
        /* General body styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Error container styling */
        .error-container {
            max-width: 500px;
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border: 2px solid #f5c6cb;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Icon styling */
        .error-icon {
            font-size: 3rem;
            color: #f44336;
            margin-bottom: 20px;
        }

        /* Error message styling */
        .error-message {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #721c24;
        }

        .error-description {
            font-size: 1rem;
            color: #856404;
            margin-bottom: 20px;
        }

        /* Retry button styling */
        .retry-btn {
            padding: 12px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #f44336;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .retry-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">⚠️</div>
        <h2 class="error-message">Verification Error</h2>
        <p class="error-description">There was an issue verifying your details. Please try again in a few hours.</p>
        <button class="retry-btn" onclick="window.location.reload()">Try Again</button>
    </div>
</body>
</html>
