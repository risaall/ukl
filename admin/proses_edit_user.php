<?php

include("connect.php");

// cek apakah tombol simpan sudah di klik atau belum
if(isset($_POST['simpan'])){

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    // buat query update
    $result=mysqli_query($mysqli, "UPDATE login SET nama ='$nama', username='$username'")
}