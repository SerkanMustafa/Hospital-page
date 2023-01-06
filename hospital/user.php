<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>OZK</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="background-color:#4f6272;">
<header style="background-color:#b7c3f3">
    <h2 style="color:#404e5c">Система за резервиране на консултация със специалист </h2>
</header>
   
<div class="tableOuter" style="background-color:#404e5c">
        <h1>РЕГИСТРАЦИЯ</h1>
        <form action="" method="post">
        <div class="user">
                <input type="text" name="user_name" id="user_name"placeholder="Моля въведете името си">
        </div>    
        <div class="pass"> 
                <input type="text" name="user_egn" id="user_egn"placeholder="Моля въведете ЕГН-то си">
         <br /> 
          
                <input type="password" name="user_password" id="user_password" placeholder="Моля въведете паролата си">
            </div>
<div class="g-recaptcha" data-sitekey="6Lf4zQIeAAAAAOh4PJ1Y_IxBVXLZaTmZmvUqVffa"></div>

          <a href="index.php">
                <button type ="submit" class="sub" id="vlez" name="submit"> РЕГИСТРАЦИЯ </button>
        </a>
</div> 
                <br>
            </form>
             <a href="index.php">
                 <button type ="submit" class="sub" id="reg"> НАЗАД </button>
</a>
    </div>
    <script>
$('#vlez').on('click',function()
{
    if( $('#user_egn').val().length === 0 ||  $('#user_password').val().length === 0 ||  $('#user_name').val().length === 0 ) {
        alert('Моля въведете стойност в полетата!');
    }
});
</script>
<?php
$salt="#!@#$213SA$#@D322#4412SAD432eSADds";
ob_start();
session_start();
include 'connect.php';

    if(isset($_POST['submit']))
{   if(isset($_POST['user_password'])&& !empty($_POST['user_password'])
    && isset($_POST['user_egn'])&& !empty($_POST['user_egn']) 
    && isset($_POST['user_name'])&& !empty($_POST['user_name']) )

    {
        $user_name=htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_name']));
        $user_egn=htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_egn']));
        $user_password=htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_password']));
$user_password=md5($user_password.''.$salt);
$query = "INSERT INTO `user`
(`user_name`, `user_egn`, `user_password` ) 
VALUES('$user_name','$user_egn','$user_password')";

$insert = mysqli_query($connect,$query);

        if($insert)
        {
            echo '<meta http-equiv="refresh" content="0; url=index.php" />';
        }
        else{
            echo 'PROBLEM ERROR!';
            }
    }
    
}
?>
   
</body>
</html>