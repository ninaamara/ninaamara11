<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $ambilData = mysqli_query($koneksi, "DELETE  FROM mahasiswa WHERE id ='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/uas_nina/data_mahasiswa.php'>";
?>