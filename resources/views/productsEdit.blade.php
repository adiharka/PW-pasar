<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">

    <title>Edit Produk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- buat icon -->
    <link rel="stylesheet" href="fontawasome/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 30px;
      }
      
      td, th {
        border: 1px solid #bdcdeb;
        text-align: center;
        padding: 8px;
      }
      th{
        height: 50px;
      }
      
      tr:nth-child(even) {
        background-color: #bdcdeb;
      }
      </style>
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>S-Mart E-commerce Terpercaya</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logo3.jpeg" style="width: 200px;height: 90px; margin-bottom:70px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:50px;">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('indexToko')}}">Home
              </a>
            </li>
            <li class="nav-item  active">
              <a class="nav-link" href="{{url('productsEdit')}}">Products
              <span class="sr-only">(current)</span>
              </a>
            </li>
            <!-- <li class="nav-item"> -->
              <a class="nav-link" href="{{url('loginToko')}}">Login</a>
            </li>
          <li>
            <!-- <a href="{{url('detailToko')}}" title="Toko"> -->
              <span class="material-icons" style="margin-left: 15px;width: 5px;height: 5px;margin-top: 8px;">store</span>
            </a>
           </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <table>
      <tr>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Jumlah Stok (Kg)</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td><img src="https://statics.indozone.news/content/2020/02/26/Q8s1Q0/t_5e560470750f8_700.jpg" alt="Bayam merah" style="height: 150px;"></td>
        <td>Bayam Merah</td>
        <td>Bayam merah merupakan varians jenis dari bayam.</td>
        <td>Rp.5.000</td>
        <td>15</td>
        <td><a href="{{url('editBayam')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://st4.depositphotos.com/20616804/24952/i/600/depositphotos_249526346-stock-photo-a-bundle-of-fresh-spinach.jpg" alt="Bayam Hijau" style="height: 150px;"></td>
        <td>Bayam Hijau</td>
        <td>Bayam merupakan sayuran hijau</td>
        <td>Rp.15.000</td>
        <td>15</td>
        <td><a href="{{url('editBayamIjo')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://deeres.id/wp-content/uploads/2020/07/cabe-rawit-mhanu-prentul-e1613459006497.jpg" alt="Cabe rawit"  style="height: 150px;"></td>
        <td>Cabe Rawit</td>
        <td>Cabe rawit bukan merupakan sayuran hijau</td>
        <td>Rp.5.000</td>
        <td>25</td>
        <td><a href="{{url('editCabai')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://asset.kompas.com/crops/p-lGoscbOh7DCAVHzMunqAxNCNQ=/0x253:675x703/750x500/data/photo/2021/01/30/6014da00f2716.jpeg" alt="Labu"  style="height: 150px;"></td>
        <td>Labu Kuning</td>
        <td>Labu kuning bukan merupakan sayuran hijau</td>
        <td>Rp.10.000</td>
        <td>20</td>
        <td><a href="{{url('editLabu')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://asset.kompas.com/crops/sXTlbIkm--BJRejh3NHb3BErBds=/34x0:974x627/750x500/data/photo/2017/08/13/744710335.jpg" alt="Paprika"  style="height: 150px;"></td>
        <td>Paprika</td>
        <td>Paprika bukan merupakan sayuran hijau</td>
        <td>Rp.10.000</td>
        <td>15</td>
        <td><a href="{{url('editPaprika')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://cdn.sindonews.net/dyn/620/makassar/news/2020/01/06/7/39316/ngeri-5-sayur-sehat-ini-bisa-sangat-jahat-dan-berbahaya-sor.jpg" alt="Sawi"   style="height: 150px;"></td>
        <td>Sawi</td>
        <td>Sawi merupakan sayuran hijau</td>
        <td>Rp.10.000</td>
        <td>15</td>
        <td><a href="{{url('editSawi')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://img-z.okeinfo.net/okz/500/library/images/2018/07/16/v9unnsyz4o3qogieqzc5_12484.jpg" alt="Terong" style="height: 150px;"></td>
        <td>Terong</td>
        <td>Terong bukan merupakan sayuran hijau</td>
        <td>Rp.15.000</td>
        <td>13</td>
        <td><a href="{{url('editTerong')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://lifepack.id/wp-content/uploads/2020/06/5-Manfaat-Buah-Tomat-Untuk-Kesehatan-Tubuh.jpg" alt="Tomat"  style="height: 150px;"></td>
        <td>Tomat</td>
        <td>Tomat bukan merupakan sayuran hijau</td>
        <td>Rp.15.000</td>
        <td>15</td>
        <td><a href="{{url('editTomat')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>
      <tr>
        <td><img src="https://asset.kompas.com/crops/OJB3LJMz9ntcF--xT8YC-1Luzak=/1x0:999x666/780x390/data/photo/2019/08/06/5d492f045d831.jpg" alt="Wortel" style="height: 150px;"></td>
        <td>Wortel</td>
        <td>Wortel bukan merupakan sayuran hijau</td>
        <td>Rp.5.000</td>
        <td>15</td>
        <td><a href="{{url('editWortel')}}">Edit  </a><a href="hapus.php">Hapus</a></td>
      </tr>

    </table>
     <div ><a href="{{url('tambahproduk')}}" target="self"><input name="skip_Submit" value="Tambah Produk" name="tambah" type="submit" 
      style="width: 200px;margin-bottom:50px ;margin-top: 30px;height: 40px; margin-left: 700px;
      background-color: #ffb933;border: none;"/>
     </div>
    <!-- Featred Page Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe S-Mart Now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Yuk support kami dengan mengklik subsribe.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="logo3.jpeg" style="width: 200px;height: 90px; margin-bottom:70px;margin-left: 450px;" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2021 S-Mart
                
               
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>