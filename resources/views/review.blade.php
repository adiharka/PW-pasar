<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="logo icon.png" rel="shortcut icon">

    <title>Review</title>

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

<style type="text/css">
  
 .{


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
              <a class="nav-link" href="{{url('products')}}">Products
             </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('login_fix')}}">Login
              </a>
            </li>
             <li>
            <a href="{{url('formPembelian')}}" title="cart">
              <!-- <i class="fa fa-shopping-cart fa-sm" ></i> -->
              <i class="fa fa-shopping-cart fa-2x" style="margin-left: 20px;"></i>
              <span class="sr-only">(current)</span></a>
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
              <h1>Silahkan Review Produk </h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
                

              <img src="https://th.bing.com/th/id/OIP.TcR_uUQNkRRX3D_Cz58VJgHaE8?pid=ImgDet&rs=1" width="100%" height="500px" frameborder="0" style="width: 550px;height: 470px;margin-top: 30px "></img>
            </div>
          </div>
        



                <div class="form" style="margin-left: 100px;">
                    <form method="post" action="//submit.form" onSubmit="return validateForm();">
                      <div style="max-width: 400px;">
                      </div>
                     
                      <div style="padding-bottom: 18px;">Nama Anda<span style="color: red;"> *</span><br/>
                      <input type="text" id="data_2" name="data_2" style="width : 400px;" class="form-control"/>
                      </div>
                  
                      <div style="padding-bottom: 18px;">Beri Rating Produk<span style="color: red;"> *</span><br/>
                      <select id="data_4" name="data_4" style="width : 400px;" class="form-control"><option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      </select>
                      </div>
                      <div style="padding-bottom: 18px;">Review<span style="color: red;"> *</span><br/>
                      <textarea id="data_8" false name="data_8" style="max-width : 450px;" rows="9" class="form-control"></textarea>
                      </div>
                      <div style="padding-bottom: 18px;">Apakah anda akan merekomendasikan produk ini?<br/>
                      <span><input type="radio" id="data_9_0" name="data_9" value="Yes"/> Iya</span><br/>
                      <span><input type="radio" id="data_9_1" name="data_9" value="No"/> Tidak</span><br/>
                      <span><input type="radio" id="data_9_2" name="data_9" value="I am not sure"/> Mungkin </span><br/>
                      </div>
                      <div ><input name="skip_Submit" value="Submit" type="submit" style="width: 200px;height: 40px; margin-left: 90px;background-color: #ffb933;border: none;"/></div>
                    
                      <!-- <div> -->
                      <!-- <div style="margin-top: 30px;margin-left: 150px;"><a href="https://www.100forms.com" id="lnk100" title="form to email" >form to email</a></div> -->
                      <!-- <script src="https://www.100forms.com/js/FORMKEY:F4X7DSHS8WU4/SEND:my@email.com" type="text/javascript"></script> -->
                      <!-- </div> -->
                      </form>

                      <script type="text/javascript">
                      function validateForm() {
                      if (isEmpty(document.getElementById('data_2').value.trim())) {
                      alert('Reviewer is required!');
                      return false;
                      }
                      if (isEmpty(document.getElementById('data_5').value.trim())) {
                      alert('Title is required!');
                      return false;
                      }
                      if (isEmpty(document.getElementById('data_8').value.trim())) {
                      alert('Review is required!');
                      return false;
                      }
                      return true;
                      }
                      function isEmpty(str) { return (str.length === 0 || !str.trim()); }
                      function validateEmail(email) {
                      var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
                      return isEmpty(email) || re.test(email);
                      }
                      </script>


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
