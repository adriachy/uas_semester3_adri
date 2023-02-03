<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "db-uas-adri");
$result = mysqli_query($conn, "select count(nim) FROM tab_mahasiswa");
$row = mysqli_fetch_array($result);
$mhs = $row[0];

$result_prodi = mysqli_query($conn, "select count(id) FROM tab_prodi");
$row_prodi = mysqli_fetch_array($result_prodi);
$mhs_prodi = $row_prodi[0];
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <section class="section dashboard">
    <div class="row">
      <div class="col-md-6">
        <div class="card info-card">
          <div class="card-body">
            <h5 class="card-title">Total Mahasiswa</h5>
            <div class="d-flex align-items-center">
              <div class=" rounded-circle d-flex align-items-center justify-content-center">
              </div>
              <div class="ps-3">
                <h6 class="text-primary">
                  <?= $mhs ?>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card info-card">
          <div class="card-body">
            <h5 class="card-title">Total Program Studi</h5>
            <div class="d-flex align-items-center">
              <div class="rounded-circle d-flext align-items-center justify-content-center">
              </div>
              <div class="ps-3 ">
                <h6 class="text-primary"><?= $mhs_prodi ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('footer'); ?>