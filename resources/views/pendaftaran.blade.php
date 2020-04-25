<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="/edustage/img/favicon.png" type="image/png" />
    <title>Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/edustage/css/bootstrap.css" />
    <link rel="stylesheet" href="/edustage/css/flaticon.css" />
    <link rel="stylesheet" href="/edustage/css/themify-icons.css" />
    <link rel="stylesheet" href="/edustage/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/edustage/vendors/nice-select//edustage/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="/edustage/css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="/edustage/img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">Tentang Wikrama</a>
                </li>
                
                
                <li class="nav-item active">
                  <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Pendaftaran</h2>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>Smk Wikrama</h6>
                <p>Jl kenangan, Kota Bogor</p>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">+62821 3855 4318</a></h6>
                <p>24 JAM buat kamu</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">support@wikrama.com</a></h6>
                <p>24 jam buat kamu kamu!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form
              
              action="/pendaftaran/create"
              method="POST"
              class="row contact_form"
              enctype="multipart/form-data"
              
            >
            {{csrf_field()}}
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="nama_lengkap"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    
                  />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">jenis kelamin</label>
                      <select name="jk" class="form-control" id="exampleFormControlSelect1">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="tempat_lahir"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    
                  />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Cita-cita</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="cita_cita"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    
                  />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Anak Ke</label>
                  <input
                    type="number"
                    class="form-control"
                    id="name"
                    name="anak_ke"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    
                  />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat badan</label>
                  <input
                    type="number"
                    class="form-control"
                    id="name"
                    name="berat_badan"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    
                  />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Golongan Darah</label>
                    <select name="golongan_darah" class="form-control" id="exampleFormControlSelect1">
                        <option value="a">A</option>
                        <option value="ab">AB</option>
                        <option value="b">B</option>
                        <option value="o">o</option>
                      </select>
                </div>
                

            </div>
            
{{-- ======================================================================================================================================== --}}

              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">nama panggilan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="nama_panggilan"
                    placeholder=""
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ''"
                    required=""
                  />
                </div>
              
            
              <div class="form-group">
                <label for="exampleInputEmail1">agama</label>
                <select name="agama" class="form-control" id="exampleFormControlSelect1">
                    <option value="islam">Islam</option>
                    <option value="kristen">kristen</option>
                    <option value="budha">budha</option>
                    <option value="hindu">hindu</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hobby</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="hobby"
                placeholder=""
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = ''"
                
              />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Saudara</label>
              <input
                type="number"
                class="form-control"
                id="name"
                name="jumlah_saudara"
                placeholder=""
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = ''"
                
              />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tinggi Badan</label>
              <input
                type="number"
                class="form-control"
                id="name"
                name="tinggi_badan"
                placeholder=""
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = ''"
                
              />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input name="foto" type="file" class="form-control" >
            </div>

            </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  Daftar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Experts</a></li>
              <li><a href="#">Agencies</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form
                target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get"
                class="form-inline"
              >
                <input
                  class="form-control"
                  name="EMAIL"
                  placeholder="Your Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address '"
                  required=""
                  type="email"
                />
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -5000px;">
                  <input
                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                    tabindex="-1"
                    value=""
                    type="text"
                  />
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Thank you</h2>
            <p>Your message is successfully sent...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Sorry !</h2>
            <p>Something went wrong</p>
          </div>
        </div>
      </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/edustage/js/jquery-3.2.1.min.js"></script>
    <script src="/edustage/js/popper.js"></script>
    <script src="/edustage/js/bootstrap.min.js"></script>
    <script src="/edustage/js/stellar.js"></script>
    <script src="/edustage/vendors/nice-select//edustage/js/jquery.nice-select.min.js"></script>
    <script src="/edustage/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/edustage/js/owl-carousel-thumb.min.js"></script>
    <script src="/edustage/js/jquery.validate.min.js"></script>
    <script src="/edustage/js/jquery.ajaxchimp.min.js"></script>
    <script src="/edustage/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="/edustage/js/gmaps.min.js"></script>
    <script src="/edustage/js/contact.js"></script>
    <script src="/edustage/js/theme.js"></script>
  </body>
</html>
