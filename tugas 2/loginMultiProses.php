<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include "koneksi.php";

        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $query="Select * FROM user WHERE username ='$username' and password='$password'";
        $result=mysqli_query($connect, $query);
        $row=mysqli_fetch_assoc($result);

if($row['LEVEL'] == 1){
        echo "Anda berhasil login. Silahkan";?>
        <a href="homeCrud.php">Klik disini</a>
        <?php
        
}else if($row['LEVEL'] == 2){
        echo "Anda berhasil login. silahkan";?>
        <a href="insertForm.html">Klik disini</a>
        <?php
}else{
        echo "Anda gagal login. Silahkan";?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
}
?>
</html>