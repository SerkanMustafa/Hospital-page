<!DOCTYPE html>
<html lang="UTF-8">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.mi
n.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>ZDS</title>
</head>

<body style="background-color:#c2e1c2">
    <header style="background-color:#80ab82">
        <h2 style="color:white">Система за резервиране на консултация със специалист </h2>
    </header>
    <div class="tableOuter" style="background-color:#7dcd85">
        <h1>Използвайте вашето ЕГН и парола за да влезете в системата </h1>
        <form action="" name="login" method="post">

            <div class="password">
                <input type="password" name="user_egn" id="user_egn" placeholder="Моля въведете ЕГН-то си"><br />
            </div>
            <div class="password">
                <input type="password" name="user_password" id="user_password" placeholder="Моля въведете паролата си">
            </div>
            <div>
                <button type="submit" class="sub" id="vlez" name="submit"> Влез</button>
            </div>
            <br>
        </form>
        <a href="user.php"> <button type="submit" class="sub" id="reg">Регистрирай се!</button></a>
    </div>
    <script>
        $('#vlez').on('click', function() {
            if ($('#user_egn').val().length === 0 || $('#user_password').val().length === 0) {
                alert('Моля въведете стойност в полетата!');
            }
        });
    </script>
    <?php
    $salt = "#!@#$213SA$#@D322#4412SAD432eSADds";

    ob_start();
    session_start();
    include_once 'connect.php';
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hospital";

    $connect = mysqli_connect($host, $user, $password, $db);
    if (isset($_POST['submit'])) {
        if (
            isset($_POST['user_password']) && !empty($_POST['user_password'])
            && isset($_POST['user_egn']) && !empty($_POST['user_egn'])
        ) {
            $user_egn = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_egn']));
            $user_password = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_password']));
            $user_password = md5($user_password . '' . $salt);
            $query = "SELECT `user_id`, `user_name`, `user_egn`, `user_password` 
        FROM `user` WHERE `user_egn`='$user_egn' AND `user_password`='$user_password' ";

            $result = mysqli_query($connect, $query);
            $rows = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            echo '<pre>' . print_r($row, true) . '</pre>';
            if ($rows == 1) {
                $_SESSION['LoggedIn'] = true;
                $_SESSION['uid'] = (int)$row['user_id'];
                echo '<meta http-equiv="refresh" content="0; url=loginpage.php" />';
            } else {
                echo 'Вашите данни не са разпознати от системата';
            }
        }
    }
    ?>
</body>

</html>