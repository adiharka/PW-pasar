<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">
    <title>Produk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
            <li class="nav-item active">
              <a class="nav-link" href="{{url('products')}}">Products
              <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login_fix')}}">Login</a>
            </li>
             <li>
            <a href="{{url('cart')}}" title="cart">
              <!-- <i class="fa fa-shopping-cart fa-sm" ></i> -->
              <i class="fa fa-shopping-cart fa-2x" style="margin-left: 20px;"></i>
            </a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Produk Tersedia</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">Semua Produk</button>
              <button class="btn btn-primary" data-filter=".new">Menu Harian Terlaris</button>
              <button class="btn btn-primary" data-filter=".low">Low Price</button>
              <button class="btn btn-primary" data-filter=".high">Hight Price</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach ($dtProduk as $isi)
    <div class="featured container no-gutter">

        <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="{{url('descSawi')}}">
                <div class="featured-item">
                  <img src="https://cdn.sindonews.net/dyn/620/makassar/news/2020/01/06/7/39316/ngeri-5-sayur-sehat-ini-bisa-sangat-jahat-dan-berbahaya-sor.jpg" alt="" >
                  <h4>{{$isi->nama_barang}}</h4>
                  <h6>{{$isi->harga}}</h6>
                  <div class="card-body" style="text-align:right">
                <a href="{{route('add_to_cart',$isi->id_barang)}}" class="card-link" >Masukkan keranjang</a>
                </div>
                </div>
                
              </a>
            </div>
            @endforeach
            
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
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