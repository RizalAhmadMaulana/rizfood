<!DOCTYPE html>
<html>
  <head>
    <title>Web RizFood</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/c03fa53857.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Rizfood</h2>
            <ul>
                <li><a href="index.html"><i class="fas fa-house-user"></i>Home</a></li>
                <li><a href="about.html"><i class="fas fa-circle-info"></i>About</a></li>
                <li><a href="product.html"><i class="fas fa-utensils"></i>Product</a></li>
                <li><a href="login.php"><i class="fas fa-envelopes-bulk"></i>Recervation</a></li>
            </ul> 
            <div class="social_media">
              <a href="https://github.com/RizalAhmadMaulana"><i class="fab fa-github"></i></a>
              <a href="https://maps.app.goo.gl/wRbg4q37EzWzyVTv7"><i class="fa-solid fa-map-location-dot"></i></a>
              <a href="https://www.instagram.com/rizalram05/?next=%2F"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>
            <section id="buku">
                <div class="loading-container">
                  <div class="loading"></div>
                </div>
                <div class="form">
                  <h1 style="text-align: center; padding-bottom: 25px; padding-top: 25px;">LOGIN</h1>
                  <form action="" method="GET" name="form1">
                    <label for="user">Username:</label>
                    <input id="user" type="text" name="user" required>

                    <label for="pass">Password:</label>
                    <input id="pass" type="password" name="pass" required>

                    <button type="submit" name="submit">Login</button><br>
                  </form>
                <?php
                if (isset($_GET['user']) && isset($_GET['pass'])) {
                    $username = $_GET['user'];
                    $password = $_GET['pass'];
                    if ($username === 'admin' && $password === 'admin') {
                        echo '<div style="text-align: center; font-weight: bold;">Login Berhasil !!! ';
                        echo '<a href="recervation.php" style="color: red;">Tekan Link Ini Untuk ke Halaman Selanjutnya</a></div>';
                    } else {
                         echo '<div style="text-align: center; font-weight: bold;">Login Gagal !!!, Periksa Kembali Username dan Password Anda !!!</div>';
                    }
                }
                ?>  
                </div><br>
            </section>
        </div>
    </div>
    <footer>
      <div class="container">
          <small> Copyright &copy; 2024 - Rizal Ahmad Maulana , All Rights Reserved.</small>
      </div>
    </footer>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      // Simulate loading time
      setTimeout(function () {
              hideLoading();
          }, 3000); // Change the timeout value as needed
      });

      function hideLoading() {
          var loadingContainer = document.querySelector(".loading-container");
          loadingContainer.style.display = "none";
      }
  </script>
  </body>
</html>