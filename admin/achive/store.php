<?php
session_start();
require_once '../helper/connection.php';

$id = $_POST['id'];
$achive = $_POST['achive'];

$query = mysqli_query($connection, "insert into achive (id, achive) value('$id', '$achive')");
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
