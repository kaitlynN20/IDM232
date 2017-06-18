<?php require_once 'includes/initialize.php'; ?>
<?php
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if (!$id) redirect_to('index.php');
  else {
    $query = 'SELECT * ';
    $query .= 'FROM Videos ';
    $query .= "WHERE id = '{$id}' ";
    $query .= 'LIMIT 1';

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Database query failed.');
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Videos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/video_style.css">
	<link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/normalize.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="wrapper">
<div class="dropdown">
    <div id="myDropdown" class="dropdown-content" class="menu_bar">
        <div id="music"><a href="#">MUSIC</a></div>
        <div id="videos"><a href="index.php">VIDEOS</a></div>
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
        <a href="index.php">VIDEOS</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT</a>
</div>

	<div class="bubbles"></div>

    <?php
      while ($Videos = mysqli_fetch_assoc($result)) {
    ?>
	
	<div class="video-container">
		<div class="vid"><iframe src="<?php echo $Videos['vid-source']; ?>"></iframe> </div>
	</div>
	
	<div class="push"></div>
</div>
	<div class="border">
	<div class="txt">
		<p class="title-info"><?php echo $Videos['title']; ?></p>
		<p class="caption-info"><?php echo $Videos['caption']; ?></p>
		<p class="description-info"><?php echo $Videos['description']; ?></p>
	</div>
	</div>

    <?php
      }
      mysqli_free_result($result);
    ?>

<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>