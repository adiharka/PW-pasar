<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">
    <title>Detail Produk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      h2 {
        width: 100%;
        background-color: lightblue;
        height: 50px;
        text-align: center;
        color: rgb(72, 99, 150);
      }

      form {
        background-color: rgb(243, 190, 112);
        border-radius: 20px;
        margin-right: 30px;
        padding: 20px;
      }
      input[type=text], [type=number] {
      margin-right: 15px;
      margin-left: 15px;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      height: 25px;
    }
    input[type=submit] {
      font-size: 12pt;
      align-items: center;
      background-color: #4CAF50;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

      
    </style>
</head>
<body>

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
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login_fix')}}">Login
              </a>
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
        <h2>Bayam Merah</h2>
      <!-- Description Body -->
      <div class="row posts" style="margin-top: 40px;">
        <div id="images" class="item new col-md-4">
            <div class="featured-item">
              <img src="https://statics.indozone.news/content/2020/02/26/Q8s1Q0/t_5e560470750f8_700.jpg" alt="Bayam merah" >
            </div>
          </a>
        </div>
        <div id="description" class="item high col-md-4">
          <a>
            <div class="featured-item">
              <h3>Deskripsi Produk:</h3>
                    <p>Bayam merah merupakan varians jenis dari bayam.</p>
                    <p>Dipetik langsung dari kebun.</p>
                    <p>Bebas pestisida.</p>
                    <h3>Harga Rp. 10.000,-</h3>
                    <p>Jumlah Stok : 15 Kg</p>
            </div>
          </a>
        </div>
        <div id="formbeli" class="item low col-md-4">
          <a>
            <form action="keranjang.html" method="POST">
              
              <p>Jumlah Pembelian :<input type="number" name="jumlahbeli" min="1" placeholder="(dalam ons)"></p>
              <p>Catatan : <input type="text" name="catatan" placeholder="Tambahkan catatan jika perlu"></p>
              <a href="Form_Pembelian_Fix.html"><input type="submit" value="Masukkan ke Keranjang" onclick="alert('Pesanan ditambahkan ke keranjang belanja');"></a>
            </form>
          </a>
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