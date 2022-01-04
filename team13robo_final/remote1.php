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
      window.open('remote.php');
    }
  function stream(){
      window.open('stream.php')
  }
  </script>
  <title>Internet Control</title>
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
      <h1>Internet Controlled Mode</h1>
      <h2>Control the bot by clicking on the button below</h2>
      <button onclick="remote()" class="btn btn-primary mb">Control</button>
      <button onclick="stream()" class="btn btn-primary mb">Stream</button>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-bottom text-center">
      Copyright &copy; 2021 Team 13 EEE Capstone 
    </div>
  </footer>