<?php 
  require 'function.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page</title>

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
      <?php  include 'header.php' ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Welcome</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                  </div>
                <?php  
                //hitung total atlet
                $count1 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet"));
                //hitung total pelatih
                $count2 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM pelatih"));
/*                //hitung total atlet taekwondo
                $count3 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet WHERE id_cabor = '105'"));
               //hitung total atlet silat
                $count4 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet WHERE id_cabor = '104'"));
                //hitung total atlet karate
                $count5 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet WHERE id_cabor = '103'"));
                //hitung total atlet angkat besi
                $count6 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet WHERE id_cabor = '101'"));
                //hitung total atlet gulat
                $count7 = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM atlet WHERE id_cabor = '102'"));
*/
                 ?>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet</h4>
                        </div>
                        <div class="card-body">
                          <?php echo '<h5 align="center">'.$count1.' Atlet</h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Pelatih</h4>
                        </div>
                        <div class="card-body">
                          <?php echo '<h5 align="center">'.$count2.' Pelatih </h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
        <!--       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet Taekwondo</h4>
                        </div>
                        <div class="card-body">
                          <?php echo '<h5 align="center">'.$count3. ' Atlet Taekwondo </h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
 -->              <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet Silat</h4>
                        </div>
                        <div class="card-body">
                          <?php echo'<h5 align="center">'.$count4. ' Atlet Silat </h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet Karate</h4>
                        </div>
                        <div class="card-body">
                          <?php echo '<h5 align="center">'.$count5. ' Atlet Karate </h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet Gulat</h4>
                        </div>
                        <div class="card-body">
                          <?php echo '<h5 align="center">'.$count7. ' Atlet Gulat </h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                  <div class="card-wrap">
                        <div class="card-header">
                          <h4 align="center">Total Atlet Angkat Besi</h4>
                        </div>
                        <div class="card-body">
                          <?php echo'<h5 align="center">'.$count6.' Atlet Angkat Besi</h5>'; ?>
                        </div>
                      </div>
                    </div>
                  </div> -->




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

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
