<!DOCTYPE html>
<html lang="en">
  <head>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/b9942b809b3bed57735b89463/42092ba3f729bf30f482dac56.js");</script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Piedra&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="travel.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Travel Blog</title>
   
  </head>
  <body>
   <!--messsenger plugin-->
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="106509371318196"
  theme_color="#0A7CFF">
      </div>
    <!--logo and name-->

    <div class="jumbotron jumbotron-fluid" id="logoname">
      <div class="container" style="text-align:center;">
        <h3 class="display-4">TRAVEL<span> MALAYSIA</span></h3>
        <p class="lead">Make your travel enjoyable and hassle free with us.</p>
      </div>
    </div>
    
    <!--nav portion-->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><h3>TRAVEL<span>MALAYSIA</span></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h3>Places</h3>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="kl.php">Kuala Lumpur</a>
          <a class="dropdown-item" href="langkawi.php">Langkawi</a>
          <a class="dropdown-item" href="terengganu.php">Kuala Terengganu</a>
          <a class="dropdown-item" href="penang.php">Penang</a>
          <a class="dropdown-item" href="genting.php">Genting Highland</a>
          <a class="dropdown-item" href="cameron.php">Cameron Highlands</a>
          <a class="dropdown-item" href="malacca.php">Malacca</a>
          <a class="dropdown-item" href="sabah.php">Sabah</a>
          <a class="dropdown-item" href="sarawak.php">Sarawak</a>
          <a class="dropdown-item" href="Johor.php">Johor</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mosque.php"><h3>Mosques</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tips.php"><h3>Travel Tips</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="author.php"><h3>Review</h3></a>
      </li>
      
    </ul>
  </div>
</nav>
    </div>
    <br><br><br>
    <!--section flag-->
    <div class="container">
      <div class="row">
        <div class="col">
          <img
            src="image/flagmalay.jpg"
            class="img-fluid"
            alt="Responsive image"
          />
        </div>
        <div class="col">
          <h1>About Malaysia</h1>
          <p>
            Malaysia is a Southeast Asian country occupying parts of the Malay
            Peninsula and the island of Borneo. It's known for its beaches,
            rainforests and mix of Malay, Chinese, Indian and European cultural
            influences. The capital, Kuala Lumpur, is home to colonial
            buildings, busy shopping districts such as Bukit Bintang and
            skyscrapers such as the iconic, 451m-tall Petronas Twin Towers.
          </p>
          <a href="kl.php" class="btn btn-dark">LEARN MORE</a>
        </div>
      </div>
    </div>
    <br /><br />
    <!--section:place-->
    <section>
      <h1 class="text-responsive">CHOOSE YOUR DESTINATION</h1>
      <div class="card-deck">
        <div class="card">
          <img
            style="height:358px;"
            src="image/lumpur small (2).jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">KUALA LUMPUR</h5>
            <p class="card-text">
              Kuala Lumpur is the capital of Malaysia. Its modern skyline is
              dominated by the 451m-tall Petronas Twin Towers, a pair of
              glass-and-steel-clad skyscrapers with Islamic motifs. The towers
              also offer a public skybridge and observation deck.
            </p>
          </div>
          <a href="kl.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/langkawi-eagle-square.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">LANGKAWI</h5>
            <p class="card-text">
              Langkawi, officially known as Langkawi, the Jewel of Kedah, is a
              district and an archipelago of 99 islands in the Malacca Strait
              some 30 km off the mainland coast of northwestern Malaysia. Pentai
              Cenang is the most popular beach and tourist area in Langkawi,
              with tens of thousands of visitors each year.
            </p>
          </div>
          <a href="langkawi.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/terengganu-drawbridge.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">KUALA TERENGGANU</h5>
            <p class="card-text">
              Kuala Terengganu, often abbreviated as K.T., is a city, the
              administrative capital, royal capital and the main economic centre
              of Terengganu, Malaysia.
            </p>
          </div>
          <a href="terengganu.php" class="btn btn-light">LEARN MORE</a>
        </div>
      </div>
      <br />
      <!--second section-->
      <div class="card-deck">
        <div class="card">
          <img
            style="height:358px;"
            src="image/penangmain.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">PENANG</h5>
            <p class="card-text">
              Penang is a state in northwest Malaysia comprising mainland
              Seberang Perai and Penang Island. On the island, the state capital
              of George Town is home to landmarks such as colonial Fort
              Cornwallis, the ornate Chinese clan house Khoo Kongsi and the
              Kapitan Keling Mosque, all testaments to centuries of foreign
              influence.
            </p>
          </div>
          <a href="penang.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/gentingcable.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">GENTING HIGHLAND</h5>
            <p class="card-text">
              Genting Highlands is a cool hill station set amidst the cool
              mountain air and a majestic 100 million-year-old
              rainforest.Genting Highlands is also perfect for adventure
              enthusiasts as activities such as abseiling, indoor rock climbing
              and flying fox activities are available.
            </p>
          </div>
          <a href="genting.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/bohtea.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">CAMERON HIGHLANDS</h5>
            <p class="card-text">
              The Cameron Highlands is a district in Pahang, Malaysia, occupying
              an area of 712.18 square kilometres. To the north, its boundary
              touches that of Kelantan; to the west, it shares part of its
              border with Perak.
            </p>
          </div>
          <a href="cameron.php" class="btn btn-light">LEARN MORE</a>
        </div>
      </div>
      <br />
      <!--third section-->
      <div class="card-deck">
        <div class="card">
          <img
            style="height:358px;"
            src="image/Straights_Mosque.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">MALACCA</h5>
            <p class="card-text">
              Malacca City (also spelled Melaka) is the capital of the coastal
              state of Malacca, in southwestern Malaysia. At its center, Jonker
              Street, Chinatown’s main thoroughfare, is known for antique shops
              and its night market.
            </p>
          </div>
          <a href="malacca.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/sabah-mount-kinabalu.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">SABAH</h5>
            <p class="card-text">
              Sabah is a Malaysian state occupying the northern part of the
              island of Borneo. It's famed for its 4,095m-tall Mount Kinabalu,
              the country’s highest peak, crowned with distinctive granite
              spires. Sabah is also known for its beaches, rainforest, coral
              reefs and abundant wildlife, much of it within parks and reserves.
            </p>
          </div>
          <a href="sabah.php" class="btn btn-light">LEARN MORE</a>
        </div>
        <div class="card">
          <img
            style="height:358px;"
            src="image/sarawakmain.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">SARAWAK</h5>
            <p class="card-text">
              Sarawak, a Malaysian state on Borneo, stretches along the island’s
              northwest coast, including many beaches on the South China Sea.
              It's known for the rugged, dense rainforest of its interior, much
              of it protected parkland. The capital, Kuching, is a bustling city
              set on the Sarawak River.
            </p>
          </div>
          <a href="sarawak.php" class="btn btn-light">LEARN MORE</a>
        </div>
      </div>
    </section>

    <br /><br />

    <!--what you will learn-->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">WHAT YOU WILL FIND HERE</h1>
        <p class="lead slide-in from-left">
          If you’ve ever wanted to learn how to travel cheaper, experience the
          local side of a destination, and turn your dream trip into a reality,
          you are in the right place.
        </p>

        <ul class="list-group">
          <li class="list-group-item list-group-item-secondary">
          You can know the operating hours and ticket prices for every tourists attracted places. 
          </li>
          <li class="list-group-item list-group-item-primary">
            Buying e-ticket from our given link to make your travel more easier and enjoyable.
          </li>
          <li class="list-group-item list-group-item-secondary">
            Exclusive travel videos about Malaysia.
          </li>
          <li class="list-group-item list-group-item-success">
           Most important apps and website lists to travel and book hotels in malaysia with their website and installation link. 
          </li>
          <li class="list-group-item list-group-item-dark">
            Talk directly with TravelMalaysia through our messenger portal for any trvel tips.
          </li>
        </ul>
        
      </div>
    </div>
    <br /><br />
    

    <!-- footer section start -->
    <footer>
      <p>
        Travel <span
          >Malaysia | <span  id="spanDate" class="far fa-copyright"></span></span
        >
</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="footer.js"></script>
  </body>
</html>
