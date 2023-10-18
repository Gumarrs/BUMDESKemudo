<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$image = upload_file();

$query = mysqli_query($connection, "insert into struktur (id, nama, jabatan, image) value('$id', '$nama','$jabatan','$image')");


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

  move_uploaded_file($tmpName, '../assets/img/organisasi' . $namaFileBaru);
  return $namaFileBaru;
}
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
}
