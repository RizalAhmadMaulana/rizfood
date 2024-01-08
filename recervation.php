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
                  <h1 style="text-align: center; padding-bottom: 25px; padding-top: 25px;">FORM <span style="color: red;">PEMESANAN</span></h1>
                  <form action="" method="POST" name="form1">
                    <label for="no_meja">No Meja :</label>
                    <input type="text" id="no_meja" name="no_meja" size="25">

                    <label for="nama">Nama :</label>
                    <input type="text" id="nama" name="nama" size="25">

                    <label for="tanggal">Tanggal Pemesanan :</label>
                    <input type="date" id="tanggal" name="tanggal">

                    <label for="menu">Menu Pesanan :</label>
                    <select id="menu" name="menu">
                        <option value="Magelangan">Magelangan</option>
                        <option value="Nasi Ayam Bali">Nasi Campur Bali</option>
                        <option value="Mie Dokdok">Mie Dokdok</option>
                        <option value="Nasi Goreng">Nasi Goreng</option>
                        <option value="Nasi Orak Arik">Nasi Orak Arik</option>
                        <option value="Nasi Omlet">Nasi Omlet</option>
                        <option value="Nasi Taruko">Nasi Taruko</option>
                    </select>

                    <label for="jumlah">Jumlah Pesanan :</label>
                    <input type="number" id="jumlah" name="jumlah">

                    <button type="submit" name="submit">Kirim</button>
                  </form>
                </div><br>
                
                <div class="hasil">
                  <h1 style="text-align: center; padding-bottom: 25px; padding-top: 25px;">REKAP <span style="color: red;">PESANAN</span></h1>
                  <?php
                    if(isset($_POST['submit'])){
                      $no_meja = $_POST['no_meja'];
                      $nama = $_POST['nama'];
                      $tanggal = $_POST['tanggal'];
                      $menu = $_POST['menu'];
                      $jumlah = $_POST['jumlah'];
                  ?>
                  <center>
                    <table border="2">
                        <tr style="background-color: #642f2f; color: white; height: 30px;">
                          <td>NO</td>
                          <td>Nomor Meja</td>
                          <td>Nama Pemesan</td>
                          <td>Tanggal Pemesanan</td>
                          <td>Menu Pesanan</td>
                          <td>Jumlah Pesanan</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><?php echo $no_meja; ?></td>
                          <td><?php echo $nama; ?></td>
                          <td><?php echo $tanggal; ?></td>
                          <td><?php echo $menu; ?></td>
                          <td><?php echo $jumlah; ?></td>
                        </tr>
                      </table>
                  </center>
                  <?php
                    }
                  ?>
                </div>
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