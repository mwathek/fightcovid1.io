<?php include('inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>FightCovid19 - Join the movement #FightCovid19 Support your community in fighting the Corona Virtus.</title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="inner.css?v=1.2" rel="stylesheet">
<link href="responsive.css?v=1.2" rel="stylesheet">
<script src="https://kit.fontawesome.com/53bcc6fdde.js" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" sizes="32x32" href="icon.png">
<script defer src="https://friconix.com/cdn/friconix.js"> </script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    </head>
<body>
<header>
  <img src="logo.png" alt='Fight Covid-19'/>
  <ul id='nav-links'>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
  <ul id='act'>
    <li><i class="fas fa-heartbeat"></i> Sign Up</li>
    <li id='login'><i class="fas fa-long-arrow-alt-right"></i> Login</li>
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
  </ul>
</header>
<div id="container">

<div class='hm-cnt'>
  <h1 class='logo-des'>
    <span id='p1'>Fight</span><span id='p2'>Covid19</span>
    </h1>
    <p><span class='smlr'>A platform designed to keep us united despite the distance. Find support in your local cummunity and help the people in need.</span></p>
    <h2><i class="fas fa-info-circle"></i> Important Reminder: Please do NOT touch your face unless you know your hands are REALLY clean. #StaySafe #BeProtected.</h2>
    <ul id="ftr">
      <li><i class="fas fa-heart"></i> Help nurses, elderly, care-givers..etc.</li>
      <li><i class="fas fa-smile"></i> Stay connected beyond the distance</li>
      <li><i class="fas fa-search"></i> Find local support in your community</li>
      <li><i class="fas fa-ambulance"></i> Offer help, delivery, donations...etc.</li>
   
</ul>
    </ul>
    <form id='signup' method='POST' autocomplete="off">
      <h3>Join the Movement <span style='color:#00acee'>#FightCovid19</span><br><span style='font-size:12px;'><i class="fas fa-heart"></i></span> Every Act of Kindness <span>Counts</span><br>
    <span></h3>
    <span class='er-msg er-un'></span>
      <input id='nm' name='name' placeholder='Full Name...' required/>
      <input id='un' name='uname' placeholder='@username...' required/>
      <span class='er-msg er-ue'></span>
      <input type='email' name='email' placeholder='@ Email...' required/>
      <span class='er-msg er-up'></span>
      <input type='password' id='up' name='password' placeholder='Set a Password...' required/>
      <input type='password' id='uc' name='uz' placeholder='Confirm Password...' required/>
      <button type="submit"> Join Us</button>

    </form>
    <div class='hm-info'>
      <h5>We are not taking any donations at this time. To help us, please share this with your friends family or invite them to like our page on Facebook 
        <a href='https://fb.com/fightcovid19.io/' target="_BLANK">fb.com/FightCovid19.io/</a></h5>
      <p>This application/platoform is totally FREE and built on the best intentions for the people. 
        FightCovid19.io not government owned and doesn't belong to any health related agency. 
        It is simply funded and developed by another person just like you, whom also lost 
        his job/oportunities following social distancing and self-quarantine. 
        I hope it helps us unite despite the distance as we face this epidemic and that we"ll be generous 
        and considerate to help those of us in need. 
        I wish you all well! #FightCovid19 #WeGotThis #DefeatCoronaVirus</p>
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
<?php 


$ip =  $_SERVER['REMOTE_ADDR'];   // ip = 8.8.8.8
$country = file_get_contents('http://ipinfo.io/'.$ip.'/country'); // for more info visit [enter link description here][1] 


if (!mysqli_query($conn,
    "INSERT INTO track
    (os,country,ip) 
    VALUES 
    ('$_SERVER[HTTP_USER_AGENT]','$_SERVER[REMOTE_ADDR]','$country'
)"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
?>
</html>