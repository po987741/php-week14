<?php
    echo $username = $_POST["username"];
    echo $email = $_POST["user_email"];
    echo $password = $_POST["user_password"];

?>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "register";

    $con = mysqli_conect('localhost','root','','registerr');
?>

<?php
    $query = "insert into users0
    values(null,'kchuchart','chuchart','seatiew','trat','a@gmail.com','1234','m',current_timestamp());";
?>
