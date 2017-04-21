<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Orfeas Voutsaridis | Web developer</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- navigation for may site -->
	<header id="top"  class="header" >
	<!-- edw tha mpei to video-->
	
	
	<!-- intro -->
	
	<div id="navigtion" class="bar_nav">
	
	
		<section class="navigation">			
		<nav >
			<ul >
				<li class="hover"><a href="#effect" >Project</a></li>
				<li class="hover"><a href="#about" >About</a></li>
				<li class="hover"><a href="#contact">Contact</a></li>
			</ul>
		</nav>		
	</section>
	</div>
<div class="name">

		<h1>Orfeas Voutsaridis</h1>
		<img id="photo" class="photo_me" src="img/egw.jpg">
		<h2>Web Developer</h2>
		</div>
	<div class="arrow">
		
		<a id="arrow" href="#bottom"><img  src="img/down.png"></a>
		</div>
</div>
		</header>
<!--edw ksekinaw to div me ta project-->
<main>

<div  id="effect" class="project">
<section>
	<h2>Project</h2>
	
<ul id="gallery">
	<li class="box_daluz  bounce">
		<a href="egw.jpg">
		<img src="img/daluz-xalkida.jpg" alt=""></a>
		<h4>Daluz</h4>
		<p>Project i made with bootstrap.</p>
		<a href="http://orfeasvou.com/daluz/" target="_blank" ><button class="button" > click for info</button></a>
	</li>
	<li class="box_php bounce">
		<a href="egw.jpg">
		<img src="img/tech.jpg" alt=""></a>
		<h4>Php</h4>
		<p>Project i made with php for access-login register.</p>
		<button class="button">click for info</button>
		
	</li>
	<li  class="box_smart_meter bounce">
		<a href="egw.jpg">
		<img src="img/daluz-xalkida.jpg" alt=""></a>
		<h4>Smart Meter</h4>
		<p>My Master of Science i made with Arduino - raspberry pi, so i can measure the Consumption of devices.</p>
		<button class="button">click for info</button>
	</li>	
	
</ul>

</section>

</div>
<div class="arrow_div">
	<a id="arrow2" href="#bottom"><img  src="img/down.png"></a>
</div>
<!-- edw einai to about me -->

<div id="about" >
	<h2>About</h2>	
	<div class="divAbout">
	<img class="photo_adout"  src="img/egw.jpg" >
	<section class="about">
	<p>I am Orfeas Voutsaridis i have bachelor degree in <b>Εlectronic Εngineering</b> from Tei of Crete, i have a Master of Science (MSc) in <b>"Intelligent Management of Renewable Energy Systems"</b>. I love to work in web develop because it is great to create thinks and i enjoy the process.  </p>
	</section>
	
	</div>
</div>
<!-- edw ksekinaei to komati se epikoinonias -->
<div id="contact" class="contact">
<h3>Contact Info</h3>
	<div>
		<p>Email:erevos@orfeasvou.com</p>
		<p>Or</p>
		<button id="myBtn" class="button"> Click to send a mail</button>

		<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Send a email</h2>
    </div>
    <div class="modal-body">
      <form action="index.php" method="post">
      	<p>Name:<input type="text" name="name"/></p>
      	<p>Email:<input type="text" name="email"/></p>
      	<p>Message:<textarea name="sms" rows="5" cols="20"></textarea></p>
      	<p><input type="submit" name="submit" value="submit"/></p>
      </form>
      <?php 
if(isset($_POST['submit'])){

    $to = "erevos@orfeasvou.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "CV Comment";
    $subject2 = "From site CV";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['messages'];
    $message2 = "Here is a copy of your messages " . $first_name . "\n\n" . $_POST['messages'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "The Mail Sent. Thank you <b>" . $first_name . "</b>, we will contact you shortly.";
    
    }

?>
    </div>
    <div class="modal-footer">
      <h3><p>&copy; 2017 Orfeas Voutsaridis</p></h3>
    </div>
  </div>

</div>
	</div>
</div>

</main>

<footer><p>&copy; 2017 Orfeas Voutsaridis</p>
	<div >
	<a href="https://www.facebook.com/orfeas.erevos"><img class="icon_footer" src="img/facebook.png"></a>
	<a href="https://github.com/erevos-13"><img class="icon_footer" src="img/github.png"></a>
	<a href="https://www.linkedin.com/in/orfeas-voutsaridis-72b618a9/"><img class="icon_footer" src="img/linkedin.png"></a>
	<a href="https://www.instagram.com/iamorfeasvoutsaridis/"><img class="icon_footer" src="img/instagram.png"></a>
	
	</div>



</footer>
<script src="js/jquery.js"></script>


</body>
</html>