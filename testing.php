<?php 
  require 'koneksi.php';
  
  $id_atlet = $_GET['id_atlet'];
  $data = query("SELECT * FROM benchmark
                  ");
  $data2 = query("SELECT * FROM hasil WHERE id_atlet = $id_atlet");
  $data3 = query("SELECT * FROM atlet WHERE id_atlet = $id_atlet");
  $data4 = query("SELECT * FROM cabor
                  INNER JOIN atlet ON atlet.id_cabor = cabor.id_cabor
                  WHERE id_atlet = $id_atlet");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Data Atlet</title>

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
            <h1>Data Benchamrk</h1>
            <br>
          </div>

             <div class="col-12 ">
                <div class="buttons">
                 <div class="card">
                  <div class="card-header">
                    <h4>Tampil Data Benchmark dan Hasil Tes</h4>
                  </div>
                  <div class="card-body" align="center">
                  <h4>  
                    <?php 
                      foreach($data3 as $nama){
                        echo" ";
                        echo $nama['nama'];
                     ?>
                     <?php  ?>
                  </h4>
                  <h5>
                    <?php foreach($data4 as $cabor)
                      echo $cabor['nama_cabor'];
                     ?>
                  </h5>
                <?php }?>
              </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th></th>
                          <th>Benchmark / Hasil</th>
                          <th>tanggal</th>
                          <th>Run 20 Meter</th>
                          <th>Shutle Run</th>
                          <th>Flexibilty</th>
                          <th>Jump Kaki Kanan</th>
                          <th>Jump Kaki Kiri</th>
                          <th>Sit Up </th>
                          <th>Push Up</th>
                          <th>Bleep</th>

                        </tr>
                        <tr>
                          <?php foreach ($data as $row){
                            ?>
                            <td></td>
                            <td>Benchmark</td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['run20m']; ?> Detik</td>
                            <td><?php echo $row['shutle']; ?> Detik</td>
                            <td><?php echo $row['flexibility'] ?> Centi Meter</td>
                            <td><?php echo $row['jump_kaka']; ?> Meter</td>
                            <td><?php echo $row['jump_kaki']; ?> Meter</td>
                            <td><?php echo $row['situp']; ?> Kali</td>
                            <td><?php echo $row['pushup']; ?> Kali</td>
                            <td><?php echo $row['bleep']; ?> Kali</td>
                            
                            <td>
                            </td>
                        </tr>
                  <?php } ?>
                  <tr>
                    <?php foreach($data2 as $tampil){

                    ?>  
                            <td></td>
                            <td>Hasil</td>
                            <td><?php echo $tampil['tanggal']; ?></td>
                            <td><?php echo $tampil['run20m']; ?> Detik</td>
                            <td><?php echo $tampil['shutle']; ?> Detik</td>
                            <td><?php echo $tampil['flexibility'] ?> Centi Meter</td>
                            <td><?php echo $tampil['jump_kaka']; ?> Meter</td>
                            <td><?php echo $tampil['jump_kaki']; ?> Meter</td>
                            <td><?php echo $tampil['situp']; ?> Kali</td>
                            <td><?php echo $tampil['pushup']; ?> Kali</td>
                            <td><?php echo $tampil['bleep']; ?> Kali</td>
                            <br>
                  </tr>
                  <?php }  ?>
                      
                      </table>
                    </div>
                  </div>
                </div>
              </div>
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
