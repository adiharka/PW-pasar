<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembelian Barang</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">
    <title>Pembelian Barang</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- icon -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

     <!-- icon dr google -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <style>
        body {
          font-family: Arial;
          font-size: 17px;
          padding: 8px;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }
        
        .col-40 {
          -ms-flex: 40%; /* IE10 */
          flex: 40%;
        }
        
        .col-60 {
          -ms-flex: 60%; /* IE10 */
          flex: 60%;
        }
        
        
        .col-40,
        .col-60, {
          padding: 0 16px;
        }
        
        
        
        input[type=text] {
          width: 100%;
          margin-bottom: 20px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }
        
        label {
          margin-bottom: 10px;
          display: block;
        }
        
        .icon-container {
          margin-bottom: 20px;
          padding: 7px 0;
          font-size: 24px;
        }
        
        .btn {
          background-color: #4CAF50;
          color: white;
          padding: 12px;
          margin: 10px 0;
          border: none;
          width: 100%;
          border-radius: 3px;
          cursor: pointer;
          font-size: 17px;
        }
        
        .btn:hover {
          background-color: #45a049;
        }
        
        a {
          color: #2196F3;
        }
        
        hr {
          border: 1px solid lightgrey;
        }
        
        span.price {
          float: right;
          color: grey;
        }
        
        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
          .row {
            flex-direction: column-reverse;
          }
          .col-40 {
            margin-bottom: 20px;
          }
        }
        </style>

  </head>

  <body>
    <!--Navigasi-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="logo3.jpeg" style="width: 200px;height: 90px; margin-bottom:70px;" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-top:50px;"> 
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('index')}}">Home
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
          </ul>
          </div>
        </div>
      </nav>
      <!--Form Pembelian-->
      <div class="row" style="margin-top: 50px; margin-left: 30px; margin-right: 30px; margin-bottom: 50px;">
        <div class="col-60">
          <div class="container" style="
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;">
            <form action="/action_page.php">
            
                  <h3 style="margin-top: 30px;">Keranjang Belanja</h3>
                  <hr>
                  <form action="action.php">
                  <input type="checkbox" id="1" name="barang1" value="1">    Bayam Merah<br>
                  <p style="float: right;">x 3</p><br>
                  <span class="price">Rp. 30.000,-</span></p><br>
                  <p> </p>
                    <hr>
                    <input type="checkbox" id="2" name="barang2" value="2">    Cabe Rawit<br>
                    <p style="float: right;">x 5</p><br>
                    <span class="price">Rp. 50.000,-</span></p><br>
                    <p> </p>
                    <hr>
                    <input type="checkbox" id="3" name="barang3" value="3">    Sawi<br>
                    <p style="float: right;">x 2</p><br>
                    <span class="price" >Rp. 20.000,-</span></p><br>
                    <p> </p>
                    <hr>
                </form>
              
            </form>
          </div>
        </div>
        <div class="col-40">
          <div class="container">
            <h4 style="margin-top: 30px;">Ringkasan Belanja<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>3</b></span></h4>
            <label for="vocer">Masukkan Voucher Belanja</label><input type="text" name="vocer">
            <hr>
            <p>Total <span class="price" style="color:black"><b>Rp. 100.000,-</b></span></p>
             <a href="{{url('Payment_Fix')}}"><input type="submit" value="Continue to checkout" class="btn" style="background: #3a8bcd;" ></a>
          </div>
        </div>
      </div>
      <hr>
      <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
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