<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$struktur = mysqli_query($connection, "SELECT COUNT(*) FROM struktur");
$achive = mysqli_query($connection, "SELECT COUNT(*) FROM achive");
$usaha = mysqli_query($connection, "SELECT COUNT(*) FROM usaha");
$artikel = mysqli_query($connection, "SELECT COUNT(*) FROM artikel");
$pesan = mysqli_query($connection, "SELECT COUNT(*) FROM pesan");

$total_struktur = mysqli_fetch_array($struktur)[0];
$total_achive = mysqli_fetch_array($achive)[0];
$total_usaha = mysqli_fetch_array($usaha)[0];
$total_artikel = mysqli_fetch_array($artikel)[0];
$total_pesan = mysqli_fetch_array($pesan)[0];
?>


<!-- General CSS Files -->

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengurus</h4>
            </div>
            <div class="card-body">
              <?= $total_struktur ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Achievement</h4>
            </div>
            <div class="card-body">
              <?= $total_achive ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-envelope"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pesan</h4>
            </div>
            <div class="card-body">
              <?= $total_pesan ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Jenis Usaha</h4>
            </div>
            <div class="card-body">
              <?= $total_usaha ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Artikel</h4>
            </div>
            <div class="card-body">
              <?= $total_artikel ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>