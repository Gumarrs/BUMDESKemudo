<?php
require_once 'admin/helper/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

$query = mysqli_query($connection, "insert into pesan (name, email,subjek,pesan) value('$name', '$email','$subjek','$pesan')");
if ($query) {
  echo "
<script>
alert('Terimakasih pesan anda sudah terkirim');
document.location.href = 'contact.php';
</script>
";
}
