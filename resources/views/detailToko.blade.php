

   <!DOCTYPE html>
   <html lang="en">
   
     <head>
   
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="">
       <meta name="author" content="">
       <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
       <link href="logo icon.png" rel="shortcut icon">
   
       <title>Toko</title>
   
       <!-- Bootstrap core CSS -->
       <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
   
       <!-- Additional CSS Files -->
       <link rel="stylesheet" href="assets/css/fontawesome.css">
       <link rel="stylesheet" href="assets/css/tooplate-main.css">
       <link rel="stylesheet" href="assets/css/owl.css">
       <link rel="stylesheet" href="assets/css/flex-slider.css">

       <!-- buat icon -->
    <link rel="stylesheet" href="fontawasome/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   
   
          <link href="loginfix.css" rel="stylesheet">
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
       <!-- About Page Starts Here -->
       <div class="contact-page">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="section-heading">
                 <div class="line-dec"></div>
                 <h1 style="font-size: 30pt;">Informasi Toko</h1>
               </div>
             </div>
             <div class="col-md-6">
               <div id="map">
                   
   
                 <img src="https://th.bing.com/th/id/OIP.Y6ybCudmJwEmvQ17ON8jswAAAA?pid=ImgDet&w=400&h=400&rs=1"></img>
               </div>
             </div>
             <div class="col-md-6" >
               <div class="right-content" >
                 <div class="container">
                     <div class="row">                     
                        <div class="form-container" style="width: margin-left: 70px;padding-bottom: 30px;">
                         <div class="img-container">
                          <img src="avatar.png" alt="" class="avatar">
                          <h1>Toko SaskyNuzul</h1>
                         </div>
                         <div class="container" style="width: 100%;
                         max-width: 400px;
                         margin: auto; box-shadow: 0px 5px 25px -5px #999;">
                          <table style="border-collapse: collapse;
                          width: 100%;">
                              <tr>
                                  <th> </th>
                                  <th> </th>
                              </tr>
                              <tr>
                                  <td>Nama Pemilik</td>
                                  <td>Saskya Nuzul</td>
                              </tr>
                              <tr>
                                  <td>Alamat</td>
                                  <td>Pasar Suka-suka blog 5A</td>
                              </tr>
                              <tr>
                                  <td>Email</td>
                                  <td>saskyanuzuldapata@gmail.com</td>
                              </tr>
                              <tr>
                                  <td>No. telpon</td>
                                  <td>081911633100</td>
                              </tr>
                          </table>
                            <div>
                              <a href="{{url('editToko')}}">
                              <button onclick="window.location.href= {{url('editToko')}}" class="b1">Edit Informasi Toko</button> 
                            </div>
                      </div>
                            <div>
                              <a href="{{url('riwayatBeli')}}">
                              <button onclick="window.location.href={{url('riwayatBeli')}}" class="b3">Lihat Data Transaksi</button>
                            </div>
                        </div>    
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
   