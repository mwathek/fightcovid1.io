<?php include('inc.php'); 
if(!isset($_SESSION["name"])){ header('Location:index.php'); } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FightCovid19 - Join the movement #FightCovid19</title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="inner.css?v=1.2" rel="stylesheet">
<link href="responsive.css?v=1.2" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
    <img id='user' src="user.png" alt='Fight Covid-19 #FightCovid19'/>
    </div>
    <nav id='act'>
        <img id='logo' src="logo.png" alt='Fight Covid-19 #FightCovid19'/>
        <ul>
<li>
<a><i class="fas fa-bell"></i></a>
</li>
<li>
<a><i class="fas fa-comment-dots"></i></a>
</li>
<li>
<a id='close'><i class="fas fa-ellipsis-v"></i></a>
</li>
</ul></nav>
<div class='inner-content'>
    <div class='system_msg'>
    <h3><i class="fas fa-tools"></i></h3>
    <p>Some of our internal features are undergoing maintenance and enhancements. We'll notify you in a few hours once we are back and running.<br><br> Thank you for joining us. If you have any questions or concerns, you can leave us a message using the form below:</p>
    <form class='ct-form' id="sys_msg" method='POST'>
        <input type='hidden' name="c_name" value="<?= $_SESSION["name"]; ?>">
        <input type='hidden' name="c_email" value="<?= $_SESSION["email"]; ?>">
        <textarea name='msg'></textarea>
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
