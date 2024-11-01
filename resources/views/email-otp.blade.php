<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email OTP Verification</title>
    <style>
        /* Reset and body styling */
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
            background-color: #f3f6fb;
        }
        
        /* Main container styling */
        .otp-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        /* Heading styling */
        .otp-container h2 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .otp-container p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        /* OTP input styling */
        .otp-input {
            width: 50px;
            padding: 12px;
            margin: 5px;
            font-size: 1.2rem;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .otp-input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Verify button styling */
        .verify-btn {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .verify-btn:hover {
            background-color: #0056b3;
        }

        /* Resend link styling */
        .resend-link {
            margin-top: 15px;
            display: block;
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .resend-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="otp-container">
        <h2>Email Verification</h2>
        <p>Please enter the OTP sent to your email address</p>
        
        <!-- OTP input fields -->
        <div id="otp-inputs">
            <input type="text" maxlength="1" class="otp-input" autofocus>
            <input type="text" maxlength="1" class="otp-input">
            <input type="text" maxlength="1" class="otp-input">
            <input type="text" maxlength="1" class="otp-input">
        </div>
        
        <!-- Verify button -->
        <button class="verify-btn">Verify OTP</button>
        
        <!-- Resend link -->
        <a href="#" class="resend-link">Resend OTP</a>
    </div>

    <script>
        // Automatically move to the next input after entering a digit
        const otpInputs = document.querySelectorAll('.otp-input');
        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
            });
        });
    </script>
</body>
</html>
