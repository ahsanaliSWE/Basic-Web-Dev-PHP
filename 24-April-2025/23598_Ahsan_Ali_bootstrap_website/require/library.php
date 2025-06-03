<?php
    class General{

        public static function site_header($title){
            ?>
                <!doctype html>
                <html lang="en">
                  <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title><?= $title ?></title>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
                  </head>
                  <body>
                        
                      <div class="container-fluid p-0 m-0">
                        
                            <div class="row bg-light text-center py-3 fw-bold shadow-md">
                                <div class="col-12">
                                    <h1><?= $title ?></h1>
                                </div>
                            </div>
                          
            <?php
        }

        public static function site_navbar(){
            ?>
                <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top rounded-3 shadow-md mx-0 p-2">
                  <div class="container-fluid">
                    <a class="navbar-brand fw-bold fs-4" href="#">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv8q-q8tIe9uneV2Q5zoHeztF9m41_uSYjzA&s" alt="Apple Logo" width="30" height="30" class="d-inline-block align-text-top">
                        Apple
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#mac">Mac</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#iphone">iPhone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#ipads">ipad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#watch">watch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#support">Support</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-dark" href="#about-us">About us</a>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-dark me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Login</button>
                        <button class="btn btn-outline-dark me-3" >Sign-Up</button>
                    </div>
                      
                    </div>
                  </div>
                </nav>
            <?php
        }

        public static function site_slider(){
            ?>
                 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrKK5nG3gZFambRON-spxgSYW0Ji4Xwe8iQg&s" class="d-block w-100" alt="image 1">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.techmac.pk/wp-content/uploads/slider/cache/4953149ede1e4b9e6bebd936d5197c9c/apple-banner-01-by-techmacpak.jpg" class="d-block w-100" alt="image 1">
                  </div>
                  <div class="carousel-item">
                    <img src="https://shop.daisycomms.co.uk/wp-content/uploads/2023/09/Apple-iPhone-15-promo-banner-buy-now-scaled.jpg" class="d-block w-100" alt="image 1">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <?php
        }

        public static function products_card($img, $title, $description, $price){
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="card shadow-sm">
                        <img src="<?= $img ?>" class="img-fluid card-img-top" class="card-img-top" alt="<?= $title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><?= $description ?></p>
                            <p class="fw-bold">$<?= $price ?></p>
                            <a href="#" class="btn btn-dark">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php
        }

        public static function site_hero($title, $description){
            ?>
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3 bg-secondary">
                <div class="col-12">
                    <h1 class="display-4 fw-bold"><?= $title ?></h1>
                    <p class="lead text-muted"><?= $description ?></p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark btn-lg me-2">Buy</a>
                        <a href="#" class="btn btn-outline-dark btn-lg">Learn more</a>
                    </div>
                </div>
            </div>
            <?php
        }

        public static function login_modal(){
            ?>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3 p-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3 p-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-success">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            <?php
        }

        public static function site_footer(){
            ?>
                 <div class="bg-light text-muted pt-5 pb-4">
                  <div class="container text-center text-md-start">
                    <div class="row">

                      <div class="col-md-4 mb-4">
                        <h5 class="fw-bold text-dark">Apple Inc.</h5>
                        <p>
                          Bringing the best of innovation and design straight to you. Explore our range of products and discover what's possible.
                        </p>
                      </div>

                      <div class="col-md-4 mb-4">
                        <h5 class="fw-bold text-dark">Quick Links</h5>
                        <ul class="list-unstyled">
                          <li><a href="#" class="text-decoration-none text-muted">Privacy Policy</a></li>
                          <li><a href="#" class="text-decoration-none text-muted">Terms of Use</a></li>
                          <li><a href="#" class="text-decoration-none text-muted">Support</a></li>
                          <li><a href="#" class="text-decoration-none text-muted">About Us</a></li>
                        </ul>
                      </div>

                      <div class="col-md-4 mb-4">
                        <h5 class="fw-bold text-dark">Contact Us</h5>
                        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i>support@applehub.com</p>
                        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i>+1 (800) 555-APPLE</p>
                        <p><i class="bi bi-geo-alt-fill me-2"></i>Cupertino, California, USA</p>
                      </div>

                    </div>

                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <p class="text-muted mb-0">&copy; 2025 Apple Inc. All rights reserved.</p>
                            <p class="text-muted mb-0">Designed By Ahsan Ali</p>   
                        </div>
                    </div>

                  </div>
                </div>
            <?php
        }

        public static function site_scripts(){
            ?>
              </div>
  
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
            </body>
            </html>
            <?php
        }

    }


?>