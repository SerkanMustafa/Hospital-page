<!-- <?php
// ob_start();
// session_start();
// include 'connect.php';

// if(isset($_SESSION['LoggedIn'])){
//     echo '<meta http-equiv="refresh" content="0; url=loginpage.php" />';

// } -->



//zd2 vlez
// if(isset($_POST['submit']))
// {
//     if(isset($_POST['user_password']) && isset($_POST['user_egn']) )
//     {
//         $tc=htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_egn']));
//         $password=htmlspecialchars(mysqli_real_escape_string($connect, $_POST['user_password']));

//         $query="SELECT user_id  FROM `user` WHERE 'user_egn'='$tc' AND 'user_password'='$password' ";

//         $result = mysqli_query($connect,$query);
//         @$row = mysqli_fetch_assoc($result);
//         @$check= mysqli_num_rows($result);

//         if($check == 1) 
//         {
//             $_SESSION['LoggedIn'] = true;
//            $_SESSION['uid'] = $row['f_nomer'];
//             $_SESSION['rank'] = $row['rank'];

//             echo '<meta http-equiv="refresh" content="0; url=loginpage.php" />';

//         }
//     }
// }


// if(isset($_POST['vlez']))
// {
    
//     $user_egn=$_POST['user_egn'];
//     $user_password=$_POST['user_password'];

//     $query = "SELECT user_egn, user_password FROM user WHERE user_egn= '$user_egn' AND user_password = '$user_password'";
			
//     $result=mysqli_query($connect,$query);
//     $row= mysqli_fetch_assoc($result);
//     $check = mysqli_num_rows($result);	
// if($check===1)
// {
//     $_SESSION['LoggedIn']= true;
//     $_SESSION['uid'] = (int)$row['user_id'];
//     $_SESSION['rank'] = (int)$row['rank']; 
//     echo '<meta http-equiv="refresh" content="0; url=loginpage.php" />';
// }
// else
// {
//     echo 'No info';
// }     
      
      
// }
      
      /*$ask = $db->prepare("SELECT * FROM user WHERE user_egn='$user_egn' 
        and user_password='$user_password' ");
   
        $count = $ask->rowCount();
        if($count===1){
    $_SESSION['userkullanici_tc']=$user_egn;
    header('location:loginpage.php?accesallowed');
    exit;
        }
        else{
            header('location:index.php?accesdennied');
        }
}
/*
if(isset($_post["vlez"]))
{
   
    $user_egn = $_POST['user_egn'])? $_POST['user_egn'] : null;
    $user_password = isset($_POST['user_password'])? $_POST['user_password'] : null;

    $sorgu = $db ->prepare('INSERT INTO user SET
    user_name = ?,
     user_egn = ?,
      user_password = ?'
    );
    $ekle = $sorgu ->execute([
        $user_name, $user_egn,  $user_password
    ]);
if($ekle){
    header('location:index.php?durum-basarili');
}else{
    header('location:index.php?durum-basarili');

}

}

if(isset($_POST['vlez']))
{
    $user_egn = $_POST['user_egn'];
    $user_password = $_POST['user_password'];

    $ask = $db -> prepare("SELECT * FROM user WHERE user_egn=:user_egn and user_password=:user_password");
    $ask->execute([
     'user_egn' => $user_egn,
     'user_password' =>  $user_password 
    ]);
    $count = $ask->rowCount();
    if($count==1){
$_SESSION['userkullanici_tc']=$user_egn;
header('location:loginpage.php?accesallowed');
exit;
    }
    else{
        header('location:index.php?accesdennied');
    }

    if(isset($_POST['r_k'])){
        $r_city=isset($_POST['city']) ? $_POST['city']: null;
        $r_hospital=isset($_POST['hospital']) ? $_POST['hospital']: null;
        $r_clinic=isset($_POST['clinic']) ? $_POST['clinic']: null;
        $r_doctor=isset($_POST['doctor']) ? $_POST['doctor']: null;
        $r_date=isset($_POST['date']) ? $_POST['date']: null;
$r_id=isset($_POST['user_id']) ? $_POST['user_id']: null;
    }
}
*/