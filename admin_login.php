<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Admin Login</title>
    <link rel="stylesheet" href="./assets/css/scrool-bar.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <script src="./assets/js/login-ajax.js"></script>
</head>
<body>
    <div class="title">
        <img src="./assets/img/svg/log-in-outline.svg" alt="">
        Admin Login
    </div>
    <div class="log-in-placeholder">
        <div class="left">
            <img src="./assets/img/admin-coding.jpg" alt="">
        </div>
        <div class="right">
            <form id="login-form">
                <div class="label" id="login-form">
                    <img src="./assets/img/svg/at-outline.svg" alt="">
                    <input type="text" name="username" id="username" placeholder="user_name">
                </div>
                <div class="label">
                    <img src="./assets/img/svg/lock-closed-outline.svg" alt="">
                    <input type="password" name="password" id="password" placeholder="password  *">
                </div>
                <button type="button" onclick="login('admin', document.getElementById('login-form'))">Log-in</button>
            </form>
        </div>
    </div>
</body>
</html>