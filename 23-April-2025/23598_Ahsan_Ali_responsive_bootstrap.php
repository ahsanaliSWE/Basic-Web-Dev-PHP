<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">FRIENDS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
        </nav>
        <!-- navbar -->

    <div class="container-fluid py-5">
        <div class="row mb-4 text-center">
            <div class="col-md-12">
                <h1 class="text-center bg-light fw-bold rounded-4">Friends</h1>
            </div>
        </div>
        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active rounded-3">
                <img src="https://i.ebayimg.com/images/g/hf8AAOSwoRBZukAM/s-l1600.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item rounded-3">
                <img src="https://irs.www.warnerbroscanada.com/hero-banner-v2-tablet-jpeg/tv/media/browser/friends_s1s10_sf_h_dd_4320x1080_300dpi_en.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item rounded-3">
                <img src="https://media.telemundo62.com/2023/11/104781650-NBC_Friends_tv_show-1.jpg?quality=85&strip=all&resize=1200%2C675" class="d-block w-100" alt="...">
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
        <!-- carousel -->

        <!-- cards -->
        <div class="row mt-4">
            <div class="col-md-12 text-center bg-light fw-bold rounded-4 p-3 mb-4">
                <h2>Meet the Characters</h2>
            </div>
            
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://i.pinimg.com/736x/b7/6c/02/b76c0224d84a69096b75a627239256ed.jpg" class="card-img-top" alt="Monica Geller">
                  <div class="card-body">
                    <h5 class="card-title">Monica Geller</h5>
                    <p class="card-text">A chef known for her cleanliness, competitiveness, and loving nature.</p>
                  </div>
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://hips.hearstapps.com/digitalspyuk.cdnds.net/18/43/1540374820-ross-friends.jpg?crop=0.697xw:1.00xh;0.0917xw,0&resize=640:*" class="card-img-top" alt="Ross Geller">
                  <div class="card-body">
                    <h5 class="card-title">Ross Geller</h5>
                    <p class="card-text">A paleontologist with a passion for dinosaurs, and Monica’s older brother.</p>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqhp64q4tKFXGWIlW2rxAk4RP6rChEExMIGQ&s" class="card-img-top" alt="Rachel Green">
                  <div class="card-body">
                    <h5 class="card-title">Rachel Green</h5>
                    <p class="card-text">Fashion enthusiast turned businesswoman, known for her iconic style and growth.</p>
                  </div>
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQy9sMnrDbdcg-PGk926Y4rgdnAEsQf1nJ5w&s" class="card-img-top" alt="Chandler Bing">
                  <div class="card-body">
                    <h5 class="card-title">Chandler Bing</h5>
                    <p class="card-text">The king of sarcasm with a mysterious corporate job and a heart of gold.</p>
                  </div>
                </div>
              </div>
            
              
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://miro.medium.com/v2/resize:fit:1000/1*vSnPqo89lHXTxU0U5qU0Zg.jpeg" class="card-img-top" alt="Joey Tribbiani">
                  <div class="card-body">
                    <h5 class="card-title">Joey Tribbiani</h5>
                    <p class="card-text">Struggling actor with a big appetite, a bigger heart, and his catchphrase: "How you doin'?"</p>
                  </div>
                </div>
              </div>
            
            
              <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                  <img src="https://i.pinimg.com/474x/b0/c0/34/b0c03404932c233edb3e78649b4fcf74.jpg" class="card-img-top" alt="Phoebe Buffay">
                  <div class="card-body">
                    <h5 class="card-title">Phoebe Buffay</h5>
                    <p class="card-text">The eccentric and lovable musician behind “Smelly Cat” with a wild backstory.</p>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <!-- cards -->

        <div class="row g-3"> ">
            <div class="col-12">
                <div class="text-center bg-light fw-bold rounded-4 p-3 mb-4">
                    <h3>Fun Facts</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 p-3">
                    <h5>Fun Fact</h5>
                    <p>The show was filmed in front of a live audience!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 p-3">
                    <h5>Did you know?</h5>
                    <p>“Friends” was originally titled *Insomnia Café*.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 p-3">
                    <h5>Fan Favorite Episode</h5>
                    <p>"The One With the Cop" — Pivot! Pivot!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 p-3">
                    <h5>Trivia</h5>
                    <p>Phoebe’s twin sister Ursula also appears in *Mad About You*!</p>
                </div>
            </div>
        </div>

        <div class="row text-center g-3 mt-4">
            <div class="text-center bg-light fw-bold rounded-4 p-3 mb-4">
                <h3>Timeline of Events</h3>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border p-3 bg-white rounded-3">Monica and Ross grew up in Long Island</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border p-3 bg-white rounded-3">Rachel runs out on her wedding</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border p-3 bg-white rounded-3">Joey lands "Days of Our Lives"</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="border p-3 bg-white rounded-3">Monica proposes to Chandler</div>
            </div>
        </div>

        <!-- cards -->
        <div class="row g-3 mt-4">
            <div class="text-center bg-light fw-bold rounded-4 p-3 mb-4">
                <h3>Iconic Quotes</h3>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-success text-white text-center">“Could I *be* wearing any more clothes?” — Joey</div>
            </div>
            <div class="ol-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-warning text-white text-center">“Welcome to the real world. It sucks.” — Monica</div>
            </div>
            <div class="ol-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-danger text-white text-center">“I'm not great at advice. Can I interest you in a sarcastic comment?” — Chandler</div>
            </div>
            <div class="ol-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-light text-center">“We were on a break!” — Ross</div>
            </div>
            <div class="ol-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-primary text-white text-center">“Isn’t that just kick-you-in-the-crotch, spit-on-your-neck fantastic?” — Rachel</div>
            </div>
            <div class="ol-lg-2 col-md-3 col-sm-4">
                <div class="card p-3 bg-secondary text-white text-center">“Smelly Cat, Smelly Cat...” — Phoebe</div>
            </div>
        </div>
        <!-- cards -->

        <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
          <h3 class="bg-light fw-bold p-3 mb-4">Fun Moments from Friends</h3>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Ross's Leather Pants Incident
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Ross tries to wear leather pants on a date but ends up stuck in the bathroom, using lotion and powder to escape them. Classic Geller awkwardness!
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Phoebe's "Smelly Cat" Origins
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                “Smelly Cat” was Phoebe’s most iconic song. She performed it at Central Perk and even shot a (terribly dubbed) music video for it!
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Joey Doesn't Share Food!
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                Joey’s date took a few of his fries, and he freaked out. Lesson: If you eat Joey's food, you’re risking the friendship.
              </div>
            </div>
          </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>