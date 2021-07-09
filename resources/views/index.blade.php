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
              <a class="nav-link" href="{{url('list_produk')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login_fix')}}">Login</a>
            </li>
             <li>
            <a href="{{url('formPembelian')}}" title="cart">
              <!-- <i class="fa fa-shopping-cart fa-sm" ></i> -->
              <i class="fa fa-shopping-cart fa-2x" style="margin-left: 20px;"></i>
            </a>
          </li>
          <div class="out" style="margin-left: 24px;">
              <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">Logout</a>
              </li>
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
                <a href="{{url('products')}}">Buy Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
               <a href="{{url('descPaprika')}}">
                <div class="featured-item">
                  <img src="https://asset.kompas.com/crops/sXTlbIkm--BJRejh3NHb3BErBds=/34x0:974x627/750x500/data/photo/2017/08/13/744710335.jpg" alt="Item 1" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Paprika</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
             <a href="{{url('descLabu')}}u">
                <div class="featured-item">
                  <img src="https://asset.kompas.com/crops/p-lGoscbOh7DCAVHzMunqAxNCNQ=/0x253:675x703/750x500/data/photo/2021/01/30/6014da00f2716.jpeg" alt="Item 2" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Labu Kuning</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="{{url('descTomat')}}">
                <div class="featured-item">
                  <img src="https://lifepack.id/wp-content/uploads/2020/06/5-Manfaat-Buah-Tomat-Untuk-Kesehatan-Tubuh.jpg" alt="Item 3" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Tomat</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="{{url('descCabai')}}">
                <div class="featured-item">
                  <img src="https://deeres.id/wp-content/uploads/2020/07/cabe-rawit-mhanu-prentul-e1613459006497.jpg" alt="Item 4" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Cabe Rawit</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="{{url('descBayamIjo')}}">
                <div class="featured-item">
                  <img src="https://st4.depositphotos.com/20616804/24952/i/600/depositphotos_249526346-stock-photo-a-bundle-of-fresh-spinach.jpg" alt="Item 5" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Bayam Hijau</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="{{url('descBayam')}}">
                <div class="featured-item">
                  <img src="https://statics.indozone.news/content/2020/02/26/Q8s1Q0/t_5e560470750f8_700.jpg" alt="Item 6" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Bayam Merah</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="{{url('descWortel')}}">
                <div class="featured-item">
                  <img src="https://asset.kompas.com/crops/OJB3LJMz9ntcF--xT8YC-1Luzak=/1x0:999x666/780x390/data/photo/2019/08/06/5d492f045d831.jpg" alt="Item 7" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Wortel</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="https://asset.kompas.com/crops/IUcAMKbmQQc-qRUdALac28zAarY=/0x0:1000x667/750x500/data/photo/2017/07/30/727506057.jpg" alt="Item 8" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Brokoli</h4>
                  <h6>Rp.10.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="https://asset.kompas.com/crops/A1pqv_0Um0AOuA4rMshY5Xg3BAw=/0x0:1000x667/750x500/data/photo/2019/06/06/1393496124.jpg" alt="Item 9" style="width:200px;height:200px;margin-left: 10px;">
                  <h4>Bawang Merah</h4>
                  <h6>Rp.10.000</h6>
                </div>
              </a>
            </div>
          </div>
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
