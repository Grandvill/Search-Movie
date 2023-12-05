<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    
    <script src="navbar.js"></script>
    
    <title>Layar Kaca 22</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-3">
      <!-- menggunakan container agar konten nya ke tengah-->
      <div class="container">
        <a href="#" class="navbar-brand">LayarKaca22</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </button>
        <a href="logout.php" class="btn btn-dark">Log out</a>
        </div>
      </div>
    </nav>      
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1>LayarKaca22</h1>
          
          
          <h4>Hello, <?php echo $user_data['user_name']; ?></h4>
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="input-group mb-3">
            <input type="text" class="form-control input-keyword" placeholder="Masukkan Judul..." />
            <div class="input-group-append">
              <button class="btn btn-primary search-button" type="button">Search</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row movie-container"></div>
    </div>

    <!-- Awal Modal -->
    <div class="modal fade" id="movieDetailModal" tabindex="-1" role="dialog" aria-labelledby="movieDetailModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="movieDetailModalLabel">Movie Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>