<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$misi = $_POST['misi'];


$query = mysqli_query($connection, "UPDATE misi SET misi = '$misi' WHERE id = '$id'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
