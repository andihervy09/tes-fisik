<?php 
require 'function.php';
  $id_tes = $_GET['id_tes'];
  $data = query("SELECT * FROM benchmark 
    INNER JOIN atlet ON benchmark.id_atlet = atlet.id_atlet WHERE id_tes = $id_tes
                  ")[0];
    if(isset($_POST["submit"])) {
      if(editb($_POST) > 0) {
        echo "<script>
              alert('Data berhasil disimpan');
              document.location.href = 'benchmark.php'
              </script>";
      } 
      else 
      {
        echo "<script>
              alert('Data gagal disimpan');
              document.location.href = 'edit_benchmark.php'
              </script>";
      }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Edit Benchmark</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              
            </div>
          </div>
        </form>
      
      </nav>
      <?php include 'header.php'; ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Atlet</h1>
            <br>
          </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Data Atlet</h4>
                  </div>
                  <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <input type="hidden" name="id_tes" value="<?php echo $data['id_tes']; ?>">
                    <input type="hidden" name="id_atlet" value="<?php echo $data['id_atlet']; ?>">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Run 20 M</label>
                    <input type="text" class="form-control" name="run20m" value="<?php echo $data['run20m']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Shutel Run</label>
                    <input type="text" class="form-control" name="shutle" value="<?php echo $data['shutle']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Flexibility<*/label>
                    <input type="text" class="form-control" name="flexibility" value="<?php echo $data['flexibility']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Hop step jump  Kaki kanan </label>
                    <input type="text" class="form-control" name="jump_kaka" value="<?php echo $data['jump_kaka']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Hop step jump  Kaki Kiri </label>
                    <input type="text" class="form-control" name="jump_kaki" value="<?php echo $data['jump_kaki']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Sit Up 2 Menit </label>
                    <input type="text" class="form-control" name="situp" value="<?php echo $data['situp']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Push Up 1 Menit  </label>
                    <input type="text" class="form-control" name="pushup" value="<?php echo $data['pushup']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Input Benchmark Bleep </label>
                    <input type="text" class="form-control" name="bleep" value="<?php echo $data['bleep']; ?>">
                  </div>

                    <div class="buttons">
                      <input type="submit" class="btn btn-primary" name="submit">
                    </div>
                    </form>
          <div class="section-body">
          </div>
        </section>
      </div>
     <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://instagram.com/amhervy_">Andi Muhammad Hervy</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="node_modules/cleave.js/dist/cleave.min.js"></script>
  <script src="node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
  <script src="node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="node_modules/select2/dist/js/select2.full.min.js"></script>
  <script src="node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
</body>
</body>
</html>
