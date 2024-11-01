<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS OTP Verification</title>
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
            background-color: #f7f9fc;
        }
        
        /* Main container styling */
        .otp-container {
            width: 100%;
            max-width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            text-align: center;
        }
        
        /* Heading styling */
        .otp-container h2 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .otp-container p {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        /* OTP input styling */
        .otp-input {
            width: 50px;
            padding: 10px;
            margin: 5px;
            font-size: 1.2rem;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .otp-input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Verify button styling */
        .verify-btn {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .verify-btn:hover {
            background-color: #45a049;
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
        <h2>Enter OTP</h2>
        <p>Please enter the OTP sent to your phone number</p>
        
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
