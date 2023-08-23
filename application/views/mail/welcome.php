<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Credentials</title>
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
        .credentials {
            background-color: #007bff;
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .details {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
        }
        .login-button {
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
        <div class="credentials">
            Your Login Credentials:
        </div>
        <div class="details">
            Username: <strong><?=$details['UserName']?></strong><br>
            Password: <strong><?=$details['UserPass']?></strong>
        </div>
        <div class="button-container">
            <a class="login-button" href="https://bit.ly/3E8x16O">Login Now</a>
        </div>
        <div class="footer">
            If you have any questions or concerns, please contact our support team.
        </div>
    </div>
</body>
</html>