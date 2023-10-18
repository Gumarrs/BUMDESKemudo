<?php
session_start();
require_once '../helper/connection.php';

$id = strip_tags($_POST['id']);
$judul_artikel = strip_tags($_POST['judul_artikel']);
$tanggal = strip_tags($_POST['tanggal']);
$deskripsi = strip_tags($_POST['deskripsi']);
$imageLama = strip_tags($_POST['imageLama']);

//cek upload foto baru atau engga

if ($_FILES['foto']['error'] == 4) {
  $image = $imageLama;
} else {
  $image = upload_file();
}

$query = mysqli_query($connection, "UPDATE artikel SET id = '$id', judul_artikel = '$judul_artikel', tanggal = '$tanggal', deskripsi = '$deskripsi', image = '$image' WHERE id = '$id'");

function upload_file()
{
  $namaFile = $_FILES['image']['name'];
  $ukuranFile = $_FILES['image']['size'];
  $error      = $_FILES['image']['error'];
  $tmpName    = $_FILES['image']['tmp_name'];
  //check file yang diupload
  $extensiFileValid = ['jpg', 'jpeg', 'png'];
  $extensiFile      = explode('.', $namaFile);
  $extensiFile      = strtolower(end($extensiFile));

  if (!in_array($extensiFile, $extensiFileValid)) {
    //Cek Format Extensi File
    echo "<script>
    alert('Format File Tidak Valid');
    document.location.href = 'create.php';
</script>";
    die();
  }

  //Cek ukuran 2 mb

  if ($ukuranFile > 2048000) {
    echo "<script>
    alert('Ukuran Max 2 Mb');
    document.location.href = 'create.php';
</script>";
    die();
  }

  //generate nama file baru 
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $extensiFile;

  //pindahkan ke lokal folder

  move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
  return $namaFileBaru;
}
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
}
