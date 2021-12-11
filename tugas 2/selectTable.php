<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <table class="table table-bordered table-striped table-hover">
            <tr>
            <h2>Tabel Absensi</h2>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            <?php
            include "koneksi.php";

            $query="SELECT * FROM mahasiswa";
            $result=mysqli_query($connect, $query);

            if (mysqli_num_rows($result)){
                while($rows = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $rows["id"]?></td>
                <td><?php echo $rows["nama"]?></td>
                <td><?php echo $rows["alamat"]?></td>
            <?php
                }
            }
            
            else{
                echo "0 results";    
        }
        ?>
        </table>
        <a href="navbar2.html">Home</a>
        
    </body>
</html>