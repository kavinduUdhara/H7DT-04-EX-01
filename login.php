<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Login Navigation Page</title>
    <link rel="stylesheet" href="./assets/css/scrool-bar.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/main_login.css">
</head>
<body>
    <div class="title">
        <img src="./assets/img/svg/layers-outline.svg" alt="">
        Select Your Role
    </div>
    <div class="log-in-options">
        <div class="log-in-option" onclick="window.location.href = './student_login.php'">
            <img src="./assets/img/student-learning.jpg" alt="">
            <div class="log-in-option-name">Student</div>
        </div>
        <div class="log-in-option" onclick="window.location.href = './teacher_login.php'">
            <img src="./assets/img/teacher-teaching.jpg" alt="">
            <div class="log-in-option-name">Teacher</div>
        </div>
        <div class="log-in-option" onclick="window.location.href = './academic_officer_login.php'">
            <img src="./assets/img/administration-discussion.jpg" alt="">
            <div class="log-in-option-name">Academic Officer</div>
        </div>
        <div class="log-in-option" onclick="window.location.href = './admin_login.php'">
            <img src="./assets/img/admin-coding.jpg" alt="">
            <div class="log-in-option-name">Admin</div>
        </div>
    </div>
</body>
</html>