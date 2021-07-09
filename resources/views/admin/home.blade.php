<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">

    <title>Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <!-- buat icon -->
    <link rel="stylesheet" href="fontawasome/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Selamat Datang di S-Mart</span>
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
            <li class="nav-item active">
              <a class="nav-link" href="{{url('index')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('data_produk')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login_fix')}}">Login</a>
            </li>
          <li>
            <a href="{{url('detail_toko')}}" title="Toko">
              <span class="material-icons" style="margin-left: 20px;width: 5px;height: 5px;margin-top: 8px;">store</span>
            </a>
           </li>
              <div class="out" style="margin-left: 45px;">
              <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
           </div>
           
          </ul>
        </div>
      </div>
    </nav>



    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>S-Mart</h2>
              <div class="line-dec"></div>
              <p>S-Mart merupakan salah satu marketplace di Indonesia.S-Mart adalah solusi <strong>belanja cerdas</strong> dan <strong>efisien</strong>. Dengan S-Mart belanja dapat dilakukan dimana saja dan kapan saja.
              <br><br>Follow instagram kami <a rel="nofollow" href="">S-Mart</a>.Terima kasih atas kepercayaan anda. 
              <div class="main-button">
                <a href="{{url('productsEdit')}}">Sell Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured container no-gutter">

        <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="{{url('riwayatBeli')}}">
                <div class="featured-item">
                  <img src="table.png" alt="lihat" style="width:200px;height:200px;margin-left: 55px;">
                  
                  <h4 style="text-align: center; margin-left: 8px;">
                    Lihat Riwayat Transaksi
                     <!-- <a href={{url('riwayatBeli')}}" style="text-align: center; margin-left: 6px;" >Lihat Riwayat Transaksi</a> -->
                  </h4>
                </div>
              </a>
            </div>
            <div id="2" class="item high col-md-4">
              <a href="{{url('productsEdit')}}">
                <div class="featured-item">
                  <img src="edit2.png" alt="edit"  style="width:250px;height:200px;margin-left: 55px;">
                  
                  <h4 style="text-align: center; margin-left: 10px;">
                    Edit Produk
                     <!-- <a href="{{url('productsEdit')}}" style="text-align: center; margin-left: 110px;" >Edit Produk</a> -->
                  </h4>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="{{url('detailToko')}}">
                <div class="featured-item">
                  <img src="store.png" alt="" style="width:250px;height:200px;margin-left: 30px;">
                  <h4 style="text-align: center; margin-left: 10px;">
                    Kelola Toko
                     <!-- <a href="{{url('detailToko')}}" style="text-align: center; margin-left: 110px;" >Kelola Toko</a> -->
                  </h4>

                </div>
              </a>
            </div>
            </div>
            </div>
    <!-- Featred Ends Here -->


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
