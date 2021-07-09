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
          <div class="col-md-12" style="width:100%; background-color:	#1E90FF; padding:12px; margin:0px">
            <span style="padding:40%; color:#FFFAF0">S-Mart E-commerce Terpercaya</span>
          </div>
        </div>
      </div>
    </div>



    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Edit Data Produk</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
              <img src="https://png.pngtree.com/element_our/20200611/ourlarge/pngtree-vector-market-selling-vegetables-selling-fruits-image_2254587.jpg" width="100%" height="500px" frameborder="0" style="width: 25%;height: auto; margin-top: 50px; margin-left:37.5%"></img>
            </div>
          </div>
          <div class="col-md-6" style="width:65%;>
            <div class="right-content"style="margin-right: 10px;">
              <div class="container" >
                <form id="contact" action="{{url('update_produk',$pdk->id_barang)}}" method="post">
                {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                         <label for="fname"><b>Nama Produk</b></label>
                        <input name="nama_barang" type="text" class="form-control" id="nama_barang" placeholder="Nama Produk" required="" value="{{$pdk->nama_barang}}">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <label for="Harga"><b>Harga</b></label>
                        <input name="harga" type="text" class="form-control" id="harga" placeholder="Harga Produk " required="" value="{{$pdk->harga}}">
                      </fieldset>
                    </div>
                     <div class="col-md-12">
                      <fieldset>
                        <label for="Stok"><b>Stok</b></label>
                        <input name="stok" type="text" class="form-control" id="stok" placeholder="Stok Produk" required="" value="{{$pdk->stok}}">
                      </fieldset>
                       </div>
                      <div class="col-md-12">
                      <fieldset>
                        <label for="Berat"><b>Berat</b></label>
                        <input name="berat" type="text" class="form-control" id="berat" placeholder="Berat" required="" value="{{$pdk->berat}}">
                      </fieldset>
                       </div>
                      <div class="col-md-12">
                      <fieldset>
                        <label for="Deskripsi"  style="padding-bottom: 18px;"><b>Deskripsi</b></label>
                         <input  value="{{$pdk->deskripsi}}" name="deskripsi" type="text" id="deskripsi" false style="width : 510px;" rows="9" class="form-control">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <label for="Variasi"><b>Variasi</b></label>
                        <input name="variasi" type="text" class="form-control" id="variasi" placeholder="variasi" required="" value="{{$pdk->variasi}}">
                      </fieldset>
                       </div>

                    </div>
                    
                    <div class="col-md-12" style="margin-bottom:50px">
                      <fieldset style="margin-left: 130px;">
                        <button type="submit" id="form-submit" class="button" style="margin-right: 20px;width: 100px;">Update</button>     <button type="submit" id="form-submit" class="button" style="width: 100px;">Clear</button>
                      </fieldset>
                      
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

 
  </body>

</html>
