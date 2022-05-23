<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
</head>
<body>
        <ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
			 <li role="presentation" class="active"><a href="cetak.php">Cetak tabel</a></li>
		</ul>

    
        <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect("localhost", "root", "", "modul5");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Attempt select query execution
        $sql = "SELECT * FROM mahasiswa";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                    echo "<tr>";
                        echo "<th>id</th>";
                        echo "<th>first_name</th>";
                        echo "<th>last_name</th>";
                        echo "<th>email</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        // Close connection
        mysqli_close($link);
        ?>
</body>
</html>