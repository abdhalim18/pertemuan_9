<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_GET['id'];

//mengupdate data ke database
mysqli_query($koneksi,"delete from siswa where id='$id'");     

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>