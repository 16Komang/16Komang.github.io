<html>
<head><link rel="stylesheet" type="text/css" href="style1.css"></head>
<div class="container">
<?php
include "koneksi.php";

$id=$_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
    echo "Data berhasil dihapus";
?>
<a href="homeCrud.php">Lihat data di Tabel</a>
<?php
}else{
    echo "Data gaga dihapus" . mysqli_error($connect);
}
?>
</div>
</html>