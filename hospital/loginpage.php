<?php
include 'connect.php';  
?>
<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
     <title>HOSPITAL</title>
</head>
<body>

    <div class="ust_bar">
      <a href="loginpage.php">
          <h1>
              СРК
          </h1>
        </a>  
            <DIV class="menu">
               
                 <a href="meeting.php"><h5> Информация за консултациите </h5></a>
             </DIV>
     </div>

    <div class="logout">
        <a href="logout.php">
        ИЗХОД
    </div>
</a>




    <div class="namefam">
    <h4> ГОСПОДИН/ГОСПОЖА </h4> 
    </div>   

    <div class="o_div" id="r_div">
   
<form action="" method="post" style="padding: 80px;"> 

    <input type="date" name="date">

        <select name="city" class="hospital">
        <option value="hospital">МОЛЯ ИЗБЕРЕТЕ  </option>
        <option value="varna"> Варна </option>
        <option value="sofiq"> СОФИЯ </option>
        
        </select>

        <select name="hospital" class="hospital">
            <option value="hospital">МОЛЯ ИЗБЕРЕТЕ  </option>
            <option value="mbal_sv_anna">МБАЛ „Св. Ана-Варна“  </option>
            <option value="umbal_sv_marina">УМБАЛ Света Марина ЕАД </option>
            <option value="mbal_sv_sofiq">МБАЛ „Св. София“ </option>
            <option value="mbal_burgasmed">МБАЛ Бургасмед </option> 
            <option value="mbal_sv_ivan_rilski"> МБАЛ Св.Иван Рилски - Разград АД </option>
        </select>

        <select name="clinic" class="clinic">
        <option value="hospital">МОЛЯ ИЗБЕРЕТЕ  </option>
            <option value="klinika_koremna_hirurgiq">Коремна хирургия </option>
            <option value="klinika_ocna_klinika">Очна клиника  </option>
            <option value="klinika_ginekologiq">Гинекология </option>
            <option value="klinika_nevrohirurgiq"> Неврохирургия </option>
            <option value="klinika_pediatriq"> Педиатрия </option> 
            <option value="klinika_vytreshni_bolesti"> Вътрешни болести </option>
        </select>

        <select name="doctor" class="doctor">
        <option value="hospital">МОЛЯ ИЗБЕРЕТЕ  </option>
        <option value="petyr_petrov">д-р Петър Петров </option>
        <option value="ivan_stanimirov">д-р Иван Станимиров</option>
        <option value="pavel_trifonov">д-р Павел Трифонов </option>
        <option value="kiril_petkov">д-р Кирил Петков </option>
        <option value="simeon_stanishev">д-р Симеон Станишев </option>
        </select>
<input type="hidden" name="user_id" value="<?php echo $kc['user_id'];?>">
    <button name="r_k"> Запази ден за преглед</button>

</form>
</div>
<?php
if(isset($_POST['r_k']))
{
$city=isset($_POST['city']) ? $_POST['city'] :null;
$hospital=isset($_POST['hospital'])? $_POST['hospital'] :null;
$clinic=isset($_POST['clinic'])? $_POST['clinic'] :null;
$doctor=isset($_POST['doctor'])? $_POST['doctor'] :null;
$date=isset($_POST['date'])? $_POST['date']:null;
$user_id=isset($_POST['user_id']);

$query="INSERT INTO `meeting` ( `meeting_city`, `meeting_date`, `meeting_hospital`, `meeting_doctor`, `meeting_clinic`, `meeting_sick_id`) 
VALUES ('$city','$date','$hospital','$doctor','$clinic','$user_id')";

$insert = mysqli_query($connect,$query);
if($insert){
    echo 'Запазихте успешно ден за преглед при '.$doctor.'. В болница "'.$hospital.'" Благодарим, ви!';
}
}
?>
<div class="o_div" id="doctor_div">

<table>
   
    <tr>
        <TH>ИМЕ ДОКТОР</TH>
        <TH>Информация</TH>
</tr>
        <tr>
        <td> Петър Петров </td>
        <td> Придобити специалности:  Педиатрия 1991 г.; Онкология – 2004 г.; 
        Работно време: Всеки ден от 14:00 - 17:00;

</td>
        </tr>   
  
    <tr>
        <td> Иван Станимиров </td>
        <td> Придобити специалности: Обща и съдова хирургия
        Работно време: Всеки ден от 9:00 - 14:00;
           </td>
        </tr>   

    <tr>
        <td> Павел Трифонов </td>
        <td> Придобити специалности: детски болести ; детска ендокринология .
        Работно време: Всеки ден от 13:00 - 15:00;
           </td>
        </tr>   

    <tr>
        <td> Кирил Петков </td>
        <td> Придобити специалности: вътрешни болести, кардиология.
        Работно време: Всеки ден от 10:00 - 13:00;
           </td>
        </tr>   
   
    <tr>
        <td> Симеон Станишев </td>
        <td> Придобити специалности: ортопедия и травматология
            Работно време: Всеки ден от 12:00 - 14:00;
           </td>
        </tr>   
  
</table>
</div>



</body>
</html>