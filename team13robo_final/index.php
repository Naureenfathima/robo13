<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script> 
  <script type ="text/javascript">
  function remote()
    {
      window.location.assign('remote1.php');
    }
  function follow()
    {
      window.location.assign("follow.php");
    }
  function learn()
    {
      window.location.assign('learn.php');
    }
    //function stream(){
      //window.location.assign("http://0.0.0.0:5000/camera");
    //}
  </script>
  <title>Mobile Payload Carrier</title>
</head>


<body>

  <!-- Showcase & Nav -->
  <div id="showcase">
    <header>
      <nav class='cf'>
        <ul class='cf'>
          <li class="hide-on-small">
            <a href="#showcase">Overview</a>
          </li>
          <li>
            <a href='#bot'>Bot Control</a>
          </li>
          <li>
            <a href='#video'>Video Stream</a>
          </li>
		  
        </ul>
      </nav>
    </header>
    <div class="section-main container">
      <h1>Mobile Payload Carrier.</h1>
      <h2>Transfer load with ease in 3 curated modes.</h2>
      <p class="lead hide-on-small">
        Vedant Banerjee. Charan Reddy. R Tharun. Naureen Fathima <br>
		Guided by Dr.Venkatarangan MJ
      </p>
    </div>
  </div>

 
  <!-- Bot Control Section -->
  <section id="bot" class="section">
    <div class="container">
      <h2 class="section-head">
         Bot Control
      </h2>
      <h3>Three Modes of Control</h3>
      <p class="lead">Our mobile robot payload carrier is operable in three modes: <br>Internet Control Mode is used to control the movement of the bot via internet.
	  <br>Follow Me Mode is used when you want the bot to follow a blue color object.<br>Learn and Repeat Mode is used when you wish to teach the both a path and want it to repeat as per requirement.<br> <br> 
	  Choose your mode of Control</p>
    <button onclick="remote()" class="btn btn-primary mb">Internet Control</button>
	  <button onclick="follow()" class="btn btn-primary mb">Follow Me</button>
	  <button onclick="learn()" class="btn btn-primary mb">Learn and Repeat</button>
      <p class="text-light"></p>
      <img src="img/mockup1.jpg" alt="">
    </div>
  </section>


  <!-- Video Section -->
  <section id="video" class="section bg-light">
    <div class="container">
      <h3>Bot's stream</h3>
      <p class="lead">You can stream the bot's field of vision remotely. <br>
	  Click the button below.</p>
    <button onclick="stream()" class="btn btn-primary mb">View Stream</button>
	  <p class="lead">A quick demo below.</p>
      <video width="1080" height="600" controls>
      <source src="img/movie.mp4" type="video/mp4">
       </video>
    </div>
  </section>

 
  <!-- Footer -->
  <footer>
    <div class="footer-bottom text-center">
      Copyright &copy; 2021 Team 13 EEE Capstone 
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>
