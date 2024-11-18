<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fabricstree</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
</head>

<body>


  <div class="topnav gap-5">
    <p> <i class="fa fa-phone"></i> +123 456 7890</p>
    <p><i class="fa fa-envelope"></i> Fabricstree@gmail.com</p>
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <a class="navbar-brand" href="#"><img src="{{ asset('frontend/images/FT LOGO Ver.3 1.png') }}" alt=""></a>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form class="d-flex" role="search">
          <input class="form-control me-2 Searchcustom" type="search" placeholder="Search product..."
            aria-label="Search">
          <button class="btn btn-outline-success maincolor" type="submit">Search</button>
        </form>
      </ul>

      <div class="d-flex justify-content-center gap-2" id="searchmob">
        <button class="btn btn-outline-success login" type="submit" data-bs-toggle="modal"
          data-bs-target="#exampleModal">Login</button>
        <button class="btn btn-outline-success maincolor" type="submit">Request a call back</button>
      </div>

    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-body-tertiarys">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContents"
        aria-controls="navbarSupportedContents" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContents">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home +</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About Us +</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Products +</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us +</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="row slidermain">
    <div class="col-md-12 col-sm-12 mb-3 mb-sm-0">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('frontend/images/slider.png') }}" class="d-block w-100') }}" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Largest choice of fabrics at best prices</h1>
              <p>Source fabrics directly from the large base of textile mills, thereby enjoying competitive price,
                faster delivery and wide variety on a single online platform.</p>
              <button class="btn btn-outline-success maincolor" type="submit">Shop Now</button>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('frontend/images/slider.png') }}" class="d-block w-100') }}" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Largest choice of fabrics at best prices</h1>
              <p>Source fabrics directly from the large base of textile mills, thereby enjoying competitive price,
                faster delivery and wide variety on a single online platform.</p>
              <button class="btn btn-outline-success maincolor" type="submit">Shop Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/images/slider.png') }}" class="d-block w-100') }}" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Largest choice of fabrics at best prices</h1>
              <p>Source fabrics directly from the large base of textile mills, thereby enjoying competitive price,
                faster delivery and wide variety on a single online platform.</p>
              <button class="btn btn-outline-success maincolor" type="submit">Shop Now</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>


  <div class="container-fluid">


    <div class="container-fluid Greigecontainer">
      <p class="Greigefabric">Greige fabric</p>

      <div class="fabric_bac"></div>

      <div class="row slidermain Greigepadding">
        <div class="col-md-5 col-sm-12 mb-3 mb-sm-0">
          <p class="dedigne">DESIGN YOUR OWN</p>
          <h2 class="Gfabric">Greige fabric</h2>
          <div class="playout">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the</p>
            <button class="btn btn-outline-success maincolor KnowMore" type="submit">Know More</button>
          </div>

        </div>
        <div class="col-md-7 col-sm-12">
          <div class="topsliderrightgreige">
            <img src="{{ asset('frontend/images/fabric.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

    </div>

    <div class="row Greigepaddingsec">
      <div class="col-md-5 col-sm-12 mb-3 mb-sm-0 imagetextrelative">
        <img src="{{ asset('frontend/images/imagef1.png') }}" alt="Image 1">

        <div class="imagetext">
          <h2 class="Gfabric">Greige fabric</h2>
          <div class="playout">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the</p>
            <button class="btn btn-outline-success maincolor" type="submit">Know More</button>
          </div>
        </div>

      </div>
      <div class="col-md-5 col-sm-12 mb-3 mb-sm-0 secbothimg">
        <div class="column columnimage">
          <div class="col-12 imagetextrelative">
            <img src="{{ asset('frontend/images/imagef2.png') }}" alt="Image 2" class="img-fluid">

            <div class="imagetext">
              <h2 class="Gfabric">Greige fabric</h2>
              <div class="playout">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the</p>
                <button class="btn btn-outline-success maincolor" type="submit">Know More</button>
              </div>
            </div>

          </div>
          <div class="col-12 imagetextrelative">
            <img src="{{ asset('frontend/images/imagef3.png') }}" alt="Image 3" class="img-fluid">

            <div class="imagetext">
              <h2 class="Gfabric">Greige fabric</h2>
              <div class="playout">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the</p>
                <button class="btn btn-outline-success maincolor" type="submit">Know More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-12 mb-3 mb-sm-0 imagetextrelative">
        <img src="{{ asset('frontend/images/imagef4.png') }}" alt="Image 4">
        <div class="imagetext">
          <h2 class="Gfabric">Greige fabric</h2>
          <div class="playout">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the</p>
            <button class="btn btn-outline-success maincolor" type="submit">Know More</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container aboutusdiuv">
      <div class="row">
        <p class="Greigefabricpad">Categories</p>


        <div class="Categoriesbtn">
          <button type="button" class="btn btn-secondary active">Cotton</button>
          <button type="button" class="btn btn-secondary">Rayon</button>
          <button type="button" class="btn btn-secondary">Denim</button>
          <button type="button" class="btn btn-secondary">Polyester</button>
          <button type="button" class="btn btn-secondary">Nylon</button>
          <button type="button" class="btn btn-secondary">Linen</button>
          <button type="button" class="btn btn-secondary">Sustainable</button>
        </div>



        <div class="CategoriesbtnGRID">
          <div class="active">Greige</div>
          <div>Yarn dyed</div>
          <div>RFD</div>
          <div>Dyed</div>
          <div>Printed</div>

        </div>


        <div class="slider" id="slider">
          <div class="slide" id="slide">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p2.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p2.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p2.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
            <img class="item" src="{{ asset('frontend/images/p1.png') }}">
            <img class="item" src="{{ asset('frontend/images/p5.png') }}">
          </div>
          <button class="ctrl-btn pro-prev"><i class="fa fa-angle-left"></i></button>
          <button class="ctrl-btn pro-next"><i class="fa fa-angle-right"></i></button>
        </div>
      </div>
    </div>

    <div class="container-fluid productcolor">
      <div class="container">

        <div class="row Productss">

          <p class="Greigefabric">Products</p>


          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/p1.png') }}" alt="Image 2" class="d-block">
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/p2.png') }}" alt="Image 2" class="d-block">
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/p3.png') }}" alt="Image 2" class="d-block">
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/product.png') }}" alt="Image 2" class="d-block">
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/p4.png') }}" alt="Image 2" class="d-block">
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/images/p5.png') }}" alt="Image 2" class="d-block">
          </div>
        </div>
      </div>

    </div>

    <div class="container">

      <div class="row aboutusdiuv slidermain">
        <p class="Greigefabric"></p>
        <div class="col-md-6 col-sm-12 mb-3 mb-sm-0">
          <div class="topsliderright">
            <img src="{{ asset('frontend/images/fabric.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>

        <div class="col-md-6 col-sm-12 mb-3 mb-sm-0 aboutusHeading">

          <div class="p-3">
            <p class="aboutus">About Us</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the</p>

          </div>

        </div>

      </div>

    </div>

    <div class="container-fluid gallerycolor">
      <div class="container">

        <div>
          <p class="Greigefabric">Gallery</p>

          <div class="row mt-5">
            <div class="col-md-6 col-sm-12 mb-3 mb-sm-0">
              <img src="{{ asset('frontend/images/imagesari.png') }}" alt="Image 2" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12 mb-3 mb-sm-0 ">
              <div class="row">
                <div class="col-6">
                  <img src="{{ asset('frontend/images/g1.png') }}" alt="Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                  <img src="{{ asset('frontend/images/g2.png') }}" alt="Image 3" class="img-fluid">
                </div>
              </div>
            </div>

          </div>

          <div class="row mt-5">

            <div class="col-md-6 col-sm-12 mb-3 mb-sm-0 ">
              <div class="row">
                <div class="col-6">
                  <img src="{{ asset('frontend/images/g3.png') }}" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-6">

                  <img src="{{ asset('frontend/images/g4.png') }}" alt="Image 2" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3 mb-sm-0">
              <img src="{{ asset('frontend/images/g5.png') }}" alt="Image 2" class="img-fluid">
            </div>

          </div>

        </div>
      </div>

    </div>

    <div class="container-fluid testimonialfluid">
      <div class="container">

        <section id="testimonials">

          <p class="Greigefabric">Testimonial</p>

          <div class="testimonial-box-container">

            <div class="testimonial-box">

              <div class="box-top">

                <div class="profile">

                  <div class="profile-img">
                    <img src="{{ asset('frontend/images/girl.png') }}" />
                  </div>

                  <div class="name-user">
                    <strong>Liam mendes</strong>
                    <span>@liammendes</span>
                  </div>
                </div>

                <div class="reviews">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                  temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates
                  incidunt blanditiis sed atque cumque.</p>
              </div>
            </div>

            <div class="testimonial-box">

              <div class="box-top">

                <div class="profile">

                  <div class="profile-img">
                    <img src="{{ asset('frontend/images/girl.png') }}" />
                  </div>

                  <div class="name-user">
                    <strong>Noah Wood</strong>
                    <span>@noahwood</span>
                  </div>
                </div>

                <div class="reviews">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                  temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates
                  incidunt blanditiis sed atque cumque.</p>
              </div>
            </div>

            <div class="testimonial-box">

              <div class="box-top">

                <div class="profile">

                  <div class="profile-img">
                    <img src="{{ asset('frontend/images/girl.png') }}" />
                  </div>

                  <div class="name-user">
                    <strong>Oliver Queen</strong>
                    <span>@oliverqueen</span>
                  </div>
                </div>

                <div class="reviews">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                  temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates
                  incidunt blanditiis sed atque cumque.</p>
              </div>
            </div>

            <div class="testimonial-box">

              <div class="box-top">

                <div class="profile">

                  <div class="profile-img">
                    <img src="{{ asset('frontend/images/girl.png') }}" />
                  </div>

                  <div class="name-user">
                    <strong>Oliver Queen</strong>
                    <span>@oliverqueen</span>
                  </div>
                </div>

                <div class="reviews">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                  temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates
                  incidunt blanditiis sed atque cumque.</p>
              </div>
            </div>
          </div>
        </section>


        <section>
          <p class="Greigefabric">Contact Us</p>

          <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30145.17140331232!2d72.80210472571645!3d19.188805882169866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6914fe3a8e5%3A0x73f264109c4db9d4!2sMalad%2C%20Malad%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1730286440157!5m2!1sen!2sin"
                width="600" height="450" style="width: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 leftpadding">

              <div class="icondiv">
                <div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div>
                  <h4>Our Address</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icondiv">
                <div><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div>
                  <h4>General Enquiries</h4>
                  <p>websupport@Fabrics treee</p>
                </div>
              </div>
              <div class="icondiv">
                <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div>
                  <h4>Call us</h4>
                  <p>+91 12345 12456</p>
                </div>
              </div>
              <div class="icondiv">
                <div><i class="fa fa-clock" aria-hidden="true"></i></div>
                <div>
                  <h4>Our Timing</h4>
                  <p>Mon - Sun :10:00AM - 04:00 PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 inputcss">
              <div style="margin-top:20px ;"><input type="text" class="div a" placeholder="Full Name">
              </div>
              <div style="margin-top: 20px;"><input type="text" class="div a" placeholder="Mobile Number"></div>
              <div style="margin-top: 20px;"><input type="text " class="div a" placeholder="Email ID"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
              <div class="form-floating">
                <textarea class="form-control flotingdiv" id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2" style="font-size: x-large; color: black; ">Message</label>
              </div>

            </div>
          </div>

          <div class="mt-4 lastbutton">
            <button class="btn " type="button">Sumbit</button>
          </div>

        </section>


      </div>
    </div>

  </div>

  <footer class="footer">

    <div class="container">
      <div class="row">
        <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="footerlogo">
            <img src="{{ asset('frontend/images/Footerlogo.png') }}">
          </div>
          <div class="social-links gap-5">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>
        <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <ul>
            <li><a href="#"><i class="fa fa-angle-right"></i> About us</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Products</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Terms & Condition</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12 thirdsecfooter">
          <h3>Contact Us</h3>
          <ul>
            <li><a href="#"><i class="fa fa-phone"></i> +91 8920 392 418</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i> mail@ Fabricstree.com</a></li>
          </ul>
        </div>
        <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <ul>
            <li><a href="#">Download the mobile app</a></li>
            <li><a href="#"> <img src="{{ asset('frontend/images/playstore.png') }}" alt=""> </a></li>
        </div>

      </div>
    </div>
  </footer>





  <!-- Modal Log in-->
  <div class="modal fade login" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">{{ __('Login In') }}</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="#">
          @csrf
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">{{ __('Email') }}*</label>
              <input id="email_id" type="email" class="form-control @error('email_id') is-invalid @enderror" name="email_id" value="{{ old('email_id') }}" required autocomplete="email_id" placeholder="Enter your email id">

                @error('email_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">{{ __('Password') }}*</label>
              <input id="pwd" type="password" class="form-control @error('pwd') is-invalid @enderror" name="pwd" required autocomplete="password" placeholder="Please enter password">

                @error('pwd')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <p class="Forgot" data-bs-toggle="modal" data-bs-target="#exampleModalforget">{{ __('Forgot Your Password?') }}</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">{{ __('Sign in') }}</button>
            <div class="text-center w-100">
              <p class="newregistation" type="submit" data-bs-toggle="modal"
            data-bs-target="#exampleModalregistation">{{ __('New Here? Registration') }} </p>
              
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Forgot Password-->
  <div class="modal fade login" id="exampleModalforget" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">Forgot Password</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
          @csrf
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input id="email_address" type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" required autocomplete="email_address" placeholder="Enter your email address">

              @error('email_address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <p class="Forgot" data-bs-toggle="modal" data-bs-target="#exampleModalforgetnew">Forgot Your Password?</p>

            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">Submit</button>

          </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Forgot New & confirm Password-->
  <div class="modal fade login" id="exampleModalforgetnew" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">Forgot Password</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
          @csrf
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">New Password</label>
              <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new_password" placeholder="New Password">

                @error('new_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
              <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" required autocomplete="confirm_password" placeholder="Confirm Password">

                @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Registration From-->
  <div class="modal fade login" id="exampleModalregistation" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">{{ __('Registration') }}</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('customer.register') }}">
        @csrf  
        <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Full Name') }}*</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="fullname" autofocus placeholder="Enter your full name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Email Id') }}*</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email id">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Mobile Number') }}*</label>
                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter your mobile number">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ __('Address') }}*</label>
                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" placeholder="Enter your address" rows="3">{{ old('address') }}</textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="New Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="text-center w-100">
              <p class="newregistation" type="submit" data-bs-toggle="modal"
            data-bs-target="#exampleModal">{{ __('Already have an account? Sign in') }}</p>
              
            </div>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary w-100 loginbtn">{{ __('Submit') }}</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

  <script>
    productScroll();

    function productScroll() {
      let slider = document.getElementById("slider");
      let next = document.getElementsByClassName("pro-next")[0];
      let prev = document.getElementsByClassName("pro-prev")[0];
      let slide = document.getElementById("slide");
      let items = slide.getElementsByClassName("item");

      let position = 0; // Initialize position outside of event listeners

      prev.addEventListener("click", function () {
        if (position > 0) {
          position -= 1;
          translateX(position); //translate items
        }
      });

      next.addEventListener("click", function () {
        if (position < hiddenItems()) {
          position += 1;
          translateX(position); //translate items
        }
      });

      function hiddenItems() {
        // Get hidden items
        return items.length - Math.floor(slider.offsetWidth / 210);
      }

      function translateX(position) {
        // Translate items
        slide.style.transform = `translateX(${position * -210}px)`;
      }
    }
  </script>
  <script type="text/javascript">
  @if (count($errors) > 0)
    $( document ).ready(function() {
        console.log( "ready!" );
        $('#exampleModalregistation').modal('show');
    });
      
  @endif
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>