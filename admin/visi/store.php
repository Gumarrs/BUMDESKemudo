<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$visi = $_POST['visi'];

$query = mysqli_query($connection, "insert into visi (id, visi) value('$id', '$visi')");
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
