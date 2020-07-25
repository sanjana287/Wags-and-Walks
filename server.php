<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recent Posts</title>
    <meta name="description" content="">
    <link rel="manifest" href="site.webmanifest">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Header/Blog Title */
body{
	/*background-image: url("assets/img/gallery/background3.jpg");*/
}
.navbar-custom { 
    background-color: transparent; ; 
} 
.navbar-brand {
	color: black; 
}
.header {
  padding: 30px;
  font-size: 40px;
  font-family: Roboto;
  text-align: center;
}
.card {
  background-image:  url("assets/img/gallery/section_bg02.png");
}

.card-deck {
	padding-bottom: 2%;
	padding-right: 2%;
}

.row {
	padding-left: 2%;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

body {
	overflow-x: hidden;
}

.card-img-top {
	margin-top: 2%;
	margin-left: 5%;
}

@media screen and (min-width: 768px) {
	.card-deck .card {
    	max-width: calc(35% - 30px);
	}

	.card-img-top {
		margin-left: 25%;
	}
}



</style>
</head>
<body>
<header>
        <!--? Header Start -->
        <div class=" container-fluid">
        <nav class=" navbar navbar-custom sticky"> 
        <a class="navbar-brand" href="index.html" style="color: black;"><b> HOME</b> </a> 
        </nav>
        <!-- Header End -->
  <div class=" header">
  <h1 style="color: black; font-family: Impact, fantasy; font-size: 50px;">Wags and Walks</h1>
  <h5 style="color: black; font-family: cursive;"> I will love you Fur-ever </h5>
  <img src="assets/img/gallery/cat1.png" style="width: 10%">
</div>
</div>
</header>

<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"pet");
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);
$x = mysqli_num_rows($result);
$i=0;
if ($x > 0)
  {
  	while($i<$x) {
  		echo '<div class="row"><div class="col-12"><div class="card-deck">';
	  	while($row = mysqli_fetch_assoc($result))
	  	{
		  	echo '<div class="card text-center" style="width: 22rem;">
		  			<img class="card-img-top" src="./uploads/'.$row["filename"].'" alt="Card image" style="width: 20rem;">
		  			 <div class="card-body">
		    			<h4 class="card-title">Location : ' . $row["location"] .'</h4>
		    			<h4 class="card-text">Uploaded By : ' .$row["name"].'</h4>
		   				<h4 class="card-text">Email : ' .$row["email"].'</h4>
		    			<h4 class="card-text">Contact Number : ' .$row["phone"].'</h4>
		    		 </div>
		  		</div>';
		  	$i+=1;
		  	if ($i%3==0)
		  		break;
	  	}
	  	echo '</div></div></div>';
  	}
  	
  }
else
{
	echo 'No Data found in database';
}
?>
<script type="text/javascript">
	window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>