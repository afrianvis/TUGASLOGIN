<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Setelah Login</title>
</head>

<body>
    <div class="berhasil">
        <?php
if (empty($_POST['nama'])) {
    header("Location:ulang.php");
} else{
    echo"<center>Wellcome to Foodissa</center><br>";
    echo"<center>Nama :".$_POST['nama']."</center><br>";
    echo"<center>Email :".$_POST['email']."</center><br>";
    date_default_timezone_set('Asia/Jakarta');
    echo"<center>Anda login tepat pada :" .date('l, d-m-Y H:i:s');
}
?>
    </div>
</body>

</html>