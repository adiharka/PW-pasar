<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">

    <title>Riwayat Transaksi Toko</title>

    
      <!-- buat icon -->
    <link rel="stylesheet" href="fontawasome/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


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
          <li class="nav-item ">
              <a class="nav-link" href="{{url('index')}}">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('productsEdit')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('loginToko')}}">Login</a>
            </li>
          <li>
            <a href="{{url('detailToko')}}" title="Toko">
              <span class="material-icons" style="margin-left: 15px;width: 5px;height: 5px;margin-top: 8px;">store</span>
            </a>
           </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <h2 style="text-align: center;">Riwayat Transaksi Toko</h2>
    <table>
      <tr>
        <th>ID Customer</th>
        <th>ID Pembelian</th>
        <th>List Barang</th>
        <th>Total Pembayaran</th>
        <th>Status Pembelian</th>
      </tr>
      <tr>
        <td>0001</td>
        <td>0000001</td>
        <td>Bayam Merah, Labu, Paprika</td>
        <td>Rp.70.000</td>
        <td>Selesai</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>0000002</td>
        <td>Sawi, Cabe Rawit, Paprika</td>
        <td>Rp.100.000</td>
        <td>Selesai</td>
      </tr>
      <tr>
        <td>0003</td>
        <td>0000003</td>
        <td>Bayam, Tomat, Terong, Cabe Rawit</td>
        <td>Rp.120.000</td>
        <td>Selesai</td>
      </tr>
      <tr>
        <td>0004</td>
        <td>0000004</td>
        <td>Cabe Rawit, Sawi</td>
        <td>Rp.50.000</td>
        <td>Selesai</td>
      </tr>
      <tr>
        <td>0005</td>
        <td>0000005</td>
        <td>Bayam Merah, Cabe Rawit, Terong, Sawi</td>
        <td>Rp.160.000</td>
        <td>Selesai</td>
      </tr>
      <tr>
        <td>0006</td>
        <td>0000006</td>
        <td>Labu, Paprika</td>
        <td>Rp.30.000</td>
        <td>Dalam pengantaran</td>
      </tr>
      <tr>
        <td>0007</td>
        <td>0000007</td>
        <td>Cabe Rawit</td>
        <td>Rp.100.000</td>
        <td>Dalam pengantaran</td>
      </tr>
      <tr>
        <td>0008</td>
        <td>0000008</td>
        <td>Terong, Bayam Merah, Sawi, Labu</td>
        <td>Rp.100.000</td>
        <td>Dalam pengantaran</td>
      </tr>
      <tr>
        <td>0009</td>
        <td>0000009</td>
        <td>Bayam Merah, Labu, Paprika</td>
        <td>Rp.80.000</td>
        <td>Dalam pengantaran</td>
      </tr>
    </table>
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
              <img src="logo3.jpeg" style="width: 200px;height: 90px; margin-bottom:70px;" alt="">
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