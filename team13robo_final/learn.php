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
      window.location.assign('remote.php');
    }
  function follow()
    {
      window.location.assign("follow.php");
    }
  </script>
  <title>Learn and Repeat</title>
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
      <h1>Learn and Repeat</h1>
      <h2>Teach the bot a path and make it repeat as per requirement</h2>
      <button onclick="remote()" class="btn btn-primary mb">Learn</button>
	  <button onclick="repeat()" class="btn btn-primary mb">Repeat</button>
    </div>
  </div>

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