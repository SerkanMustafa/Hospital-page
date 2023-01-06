<!--
// session_start();
// ob_start();
// include 'connect.php';

// $ask=$db->prepare("SELECT * FROM user WHERE user_egn='$user_egn'" );
// $ask->execute([
// 'user_egn' => $_SESSION['userkullanici_egn']
// ]);
// $count=$ask->rowCount();
// $kc=$ask->fetch(PDO::FETCH_ASSOC);
// if($ask==0){
//     header('location:index.php?nqma');
// }
//

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="ust_bar">
      <a href="loginpage.php">
          <h1>
              HOSPITAL 
          </h1>
        </a>  
            <DIV class="menu">
                <a href="account.php"><h5>ACCOUNT INFORMATION</h5></a>
                 <a href="meeting.php"><h5>Meeting information </h5></a>
             </DIV>
     </div>

    <div class="logout">
        <a href="logout.php">
        LOGOUT
    </div>
</a>

</body>
</html> -->