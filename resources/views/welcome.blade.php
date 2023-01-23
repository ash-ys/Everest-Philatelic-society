<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <link rel="Stylesheet" href="{{asset('style.css')}}">
    <title>Everest philatelic society</title>
</head>

<body>
    <header>
        <img class="logo" src="{{asset('img/logo.png')}}" alt="Everest philatelic society">
        <nav>
            <ul class="nav-links">
                <li><a href="#">HOME</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">EVENTS</a></li>
                <li><a href="#">BLOGS</a></li>
            </ul>
            <div class="hamburger">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
        </nav>
        <a class="cta" href="#"><button>CONTACT</button></a>
    </header>
    <div class="nav-two">
        <ul class="nav-links-two">
            <li><a href="#">Collecting Stamps</a></li>
            <li><a href="#">Publishing</a></li>
            <li><a href="#">Auctions</a></li>
            <li><a href="#">Visit us</a></li>
            <li><a href="#">About us</a></li>
        </ul>
    </div>


    <div class="container">
        <h1>Explore the world</h1>
        <h3>One postage stamp at a time</h3>

        <div class="color-overlay"></div>
        <a class="ctb" href="#"><button>JOIN NOW!</button></a>
    </div>
    <div class="background">
        <div class="card-container">
            <div class="card-one">
                <img class="logo" src="{{asset('img/card1.png')}}" alt="Everest philatelic society">
                <h2>Stamps</h2>
                <button>Visit</button>
            </div>
            <div class="card-two">
                <img class="logo" src="{{asset('img/card2.png')}}" alt="Everest philatelic society">
                <h2>Collecters</h2>
                <button>Visit</button>
            </div>
            <div class="card-three">
                <img class="logo" src="{{asset('img/card3.png')}}" alt="Everest philatelic society">
                <h2>Professionals</h2>
                <button>Visit</button>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="hero-image">
            <img class="logo" src="{{asset('img/hreoimg.jpg')}}">
        </div>
        <div class="hero-description">
            <h1 class="hero-title">Interested in the stamps and postal history of Nepal?</h1>
            <p class="hero-subtitle">Learn more about us and our work</p>
            <button class="hero-button">Explore</button>
        </div>
    </div>

    <footer>
  <div class="containerfooter">
    <div class="row">
      <div class="col-md-3">
        <h4>Location</h4>
        <p>123 Main St</p>
        <p>Pokhara, Nepal 12345</p>
      </div>
      <div class="col-md-3">
        <h4>Social Links</h4>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>About</h4>
        <ul>
          <li><a href="#">Company</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Contact</h4>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Blogs</a></li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright ©2023 Everest Philatelic Society</p>
    </div>
  </div>
</footer>

