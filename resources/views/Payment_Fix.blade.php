<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">

    <title>Payment</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
    
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
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
              <a class="nav-link" href="{{url('products')}}">Products</a>
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
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Konfirmasi Pembayaran</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
                

              <img src="https://akcdn.detik.net.id/community/media/visual/2020/03/16/7261a8fc-5454-43c9-97c7-0bf84bcc5d0b_43.png?w=700&q=90" width="100%" height="500px" frameborder="0" style="width: 500px;height: 470px; "></img>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                         <label for="fname"><i class="fa fa-user"></i> Nama</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nama" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <label for="adr"><i class="fa fa-institution"></i> Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="Alamat" placeholder="Alamat Pengiriman" required="">
                      </fieldset>
                    </div>
                     <div class="col-md-12">
                      <fieldset>
                        <label for="telp"><i class="fa fa-phone"></i> Telepon</label>
                        <input name="Alamat" type="text" class="form-control" id="telp" placeholder="Telepon Penerima" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                      <label for="kirim"><i class="fa fa-send-o"> </i> Metode Pengiriman</label>
                      <select name="metode_pengiriman" style="width: 510px;height: 40px; margin-bottom: 30px;">
                                <option value="kurir"> Kurir</option>
                                        <option value="gosend"> Gosend</option>
                                        <option value="grab_instant"> Grab Instant</option>
                                        </select>

                      </fieldset>
                      </div>

                       <div class="col-md-12" style="margin-bottom: 20px;">
                      <fieldset>
                      <label for="bayar"><i class=" fa fa-money"></i> Metode Pembayaran</label>
                      <select name="metode_bayar" style="width: 510px;height: 40px; margin-bottom: 30px;">
                                 <option value="Ovo">E-Wallet</option>
                                  <option value="Kartu Kredit">Kartu Kredit</option>
                                   <option value="Tranfer Bank">Tranfer Bank</option>
                                  </select>

                      
                      </fieldset>

                       <p>Total <span class="price" style="color:black"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.xx </b></span></p>
                      </div>

                     

                    </div>
                    
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Konfirmasi Pembayaran</button>
                      </fieldset>
                      <br>
                      <button style="background-color: rgb(236, 232, 232); border-color: rgb(236, 232, 232); border-radius: 5px;"><a href="{{url('statusKirim')}}">Lihat status pengiriman</a></button>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <!-- <h6>You can also keep in touch on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6> -->
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

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
              <img src="assets/images/header-logo.png" alt="">
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
    <script src="assets/js/flex-slider.js"></script>


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
