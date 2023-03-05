<?php
$post_username = $_POST['username'];
$post_password = $_POST['password'];

$host = "localhost"; // database host
$username = "root"; // database username
$password = "@DBMS15302sql"; // database password
$dbname = "h7dt_04_ex_01"; // database name

// +---------+------------------+
// | roal_id | roal_name        |
// +---------+------------------+
// |       1 | admin            |
// +---------+------------------+

$conn = new mysqli($host, $username, $password, $dbname);
$sql = "select * from user where username = '$post_username' and password = '$post_password' and roal_id='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $post_username; // store email in session
    $_SESSION['password'] = $post_password; // store password in session
    $_SESSION['acc_type'] = 'admin';
    echo "1";
} else {
    echo "0";
}

// +---------+------------------+
// | roal_id | roal_name        |
// +---------+------------------+
// |       1 | admin            |
// |       2 | academic_officer |
// |       3 | teacher          |
// |       4 | student          |
// +---------+------------------+
?>
