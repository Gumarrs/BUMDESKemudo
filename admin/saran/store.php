<?php
session_start();
require_once '../helper/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

$query = mysqli_query($connection, "insert into pesan (name, email,subjek,pesan) value('$name', '$email','$subjek','$pesan')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
