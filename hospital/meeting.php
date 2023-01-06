<?php 
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL</title>


</head>
<body>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <TH>ИД</TH>
        <TH>БОЛНИЦА</TH>
        <TH> КЛИНИКА</TH>
        <TH> ДОКТОР</TH>
        <TH> ГРАД</TH>
        <TH> ДАТА</TH>
    </tr>
</thead>
<tbody>
    <?php
    $query = "SELECT * FROM meeting";
    $table = mysqli_query($connect,$query);

 // $table = mqsqli_query($connect, $query);
while($row=mysqli_fetch_array($table)){ ?>

    <tr>
        <td> <?php echo $row['meeting_id'];?> </td>
        <td> <?php echo $row['meeting_hospital'];?> </td>
        <td> <?php echo $row['meeting_clinic'];?> </td>
        <td> <?php echo $row['meeting_doctor'];?> </td>
        <td> <?php echo $row['meeting_city'];?> </td>
        <td> <?php echo $row['meeting_date'];?></td>
        <td> <a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>"> UPDATE </a> </td>
    </tr>      
    <?php }?>
</tbody>
</table>
<a href="loginpage.php">
<button type="button" class="btn btn-primary">Назад</button>
</a>
</body>

</html>



