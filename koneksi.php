<?php
$koneksi = mysqli_connect("localhost","root","","sekolah");
// "server", "user", "password", "nama database"

if (mysqli_connect_errno()){
    echo "Koneksi Data base gagal :" . mysqli_connect_error();
}
?>