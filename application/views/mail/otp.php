<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            width: 80px;
            height: auto;
        }
        .verification-code {
            background-color: #007bff;
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .instructions {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
        }
        .verification-button {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #999999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img style="height: 100px;" class="logo" src="<?=base_url()?>assets/images/Logo-02.png" alt="Logo">
        </div>
        <div class="verification-code">
            Your OTP Verification Code is: <br>
            <span><?=$otp[0]['AuthCode']?></span>
        </div>
        <div class="instructions">
            Please enter the above OTP code to verify your account.
        </div>
        <div class="footer">
            If you did not request this OTP, please ignore this email.
        </div>
    </div>
</body>
</html>
