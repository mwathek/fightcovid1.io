<?php include('inc.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Info - FightCovid19 </title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="inner.css?v=1.3" rel="stylesheet">
<link href="responsive.css?v=1.2" rel="stylesheet">
<script src="https://kit.fontawesome.com/53bcc6fdde.js" crossorigin="anonymous"></script>

<link rel="icon" type="image/png" sizes="32x32" href="icon.png">
<script defer src="https://friconix.com/cdn/friconix.js"> </script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    </head>
<body class='inner'>
<div id='container'>
  <div class="content">
    <div id='sidebar'>
    <img id='logo' src="logo.png" alt='Fight Covid-19 #FightCovid19'/>
        <h5 id='title'><i class="fas fa-at"></i></h5>
    </div>
    <nav id='act'><ul>
<li class='show-nav'>
<a id='show'><i class="fas fa-ellipsis-v"></i></a>
<div class='mb-nav'>
<ul>
    <li><i class="fas fa-house-user"></i> Home</li>
        <li><i class="fas fa-info-circle"></i> About</li>
                <li><i class="fas fa-at"></i> Contact</li>
        
</ul>
</div>
</li>
</ul></nav>
<div class='inner-content'>
    <div class='system_msg'>
    <h3><i class="fas fa-paper-plane"></i></h3>
    <p>Welcome to FightCovid19.io<br>If you have any questions or requests please let us Know</p>
    <form class='ct-form' id="sys_msg" method='POST'>
        <input type='text' name="c_name" placeholder="You Name...">
        <input type='email' name="c_email" placeholder='@ Email...' required>
        <textarea name='msg' placeholder='Message...' required></textarea>
        <button type='submit'>@ Send</button>
    </form>
    <p></p>
</div>
</div>
</div>
  </div>


<footer>
  <p>&copy; FightCovid19.io</p>
  <ul id='so'>
    <a href='https://twitter.com/FightCovid19io' target='_BLANK'><li id='tw'><i class="fab fa-twitter"></i></li></a>
    <a href='https://www.facebook.com/fightcovid19.io/' target='_BLANK'><li id='fb'><i class="fab fa-facebook-f"></i></li></a>
  </ul>
</footer>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	  	<script src="fc19.js"></script>

</body>
</html>
