<?php require_once 'includes/initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Videos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/video_style.css">
    <link rel="stylesheet" href="css/normalize.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<div id="wrapper">
<div class="dropdown">
    <div id="myDropdown" class="dropdown-content" class="menu_bar">
        <div id="music"><a href="#">MUSIC</a></div>
        <div id="videos"><a href="#">VIDEOS</a></div>
        <div id="about"><a href="#">ABOUT</a></div>
        <div id="contact"><a href="#">CONTACT</a></div>
    </div>
    <button onclick="hamburger_animation();" class="dropbtn" id="bttn_animation">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    </button>
</div>

<div class="large_menu">
    <a href="#">MUSIC</a>
        <a href="#">VIDEOS</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT</a>
</div>
    
<div id="hero">
    <div class="heroTITLE">
        <p>VIDEOS</p>
    </div>
    <div class="logo">
	<img src="img/logo.svg" alt="logo">
	</div>
</div>
<div class="videos">
	<?php
		$query = 'SELECT * ';
		$query .= 'FROM Videos ';
			$result = mysqli_query($connection, $query);
	
		if (!$result) {
			die('Database query failed.');
		}
		
		while ($Videos = mysqli_fetch_assoc($result)) {   ?>

   <div class="video"> 
	   <img src="<?php echo $Videos['img-source']; ?>">
	   <div class="bttn"><a href="info.php?id=<?php echo $Videos['ID']; ?>"><img src="img/play_bttn.png"></a> </div>
	   	<p class="title"><?php echo $Videos['title']; ?></p>
		   <p class="caption"><?php echo $Videos['caption']; ?></p>
	</div>

	
	<?php }							   

	mysqli_free_result($result);
	?>
</div>  
<div id="footer">
    <div id="circle-links">
        <a href="https://www.facebook.com/alexis.maria.79" target="_blank"><img class="face" src="img/facebook_bttn.png" alt="link to artist facebook"></a>
    
        <a href="https://twitter.com/" target="_blank"><img class="twit" src="img/twitter_bttn.png" alt="link to artist twitter"></a>
    
        <a href="https://www.instagram.com/" target="_blank"><img class="insta" src="img/insta_bttn.png" alt="link to artist instagram"></a>
    
        <a href="https://www.tumblr.com/" target="_blank"><img class="tumb" src="img/tumblr_bttn.png" alt="link to artist tumblr"></a>
    </div>
	<div id="contact"> <img class="contact" src="img/contact_bttn.png" alt="link to contact artist"></div>
</div>
</div>
</body>
<script type="text/javascript" src="js/menu.js"></script>
</html>