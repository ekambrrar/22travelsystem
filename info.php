<?php
include_once('infop.php');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='Goa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `information` WHERE pname='Ladakh'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `information` WHERE pname='Taj Mahal'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='India Gate'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `information` WHERE pname='Rajasthan'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['manali'])) {
	$que="SELECT * FROM `information` WHERE pname='Manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="css/info.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Information</title>
	<style>
	h1.a {
  text-transform: uppercase;
}
</style>
</head>
<body style="background:#eaf2f5;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">22Travels</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="mainPage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="destination.html">Destination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="feedback.html">Feedback</a>
              </li>
             
            </ul>
            <form method="POST" action="info.php" class="d-flex">
              <input class="form-control me-2" type="text" name="search_p" placeholder="Search" aria-label="Search" size="50">
              <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
            <!-- <form method="POST" action="info.php">
              <input type="text" name="search_p" placeholder="Search.." size="50">
          
              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 60px; margin-top: 32px;">
            </form> -->
            <ul class="navbar-nav mx-4 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	  <div class="container text-center">
	<div class="hedder mt-5 mb-4">
		<h1>YOUR DESTINATION AWAITS!</h1>
	</div>
	
		<div class="container border border-4 border-secondary rounded mb-4" style="background-color:#eaf2f5 ;">
		<div class="container mt-3">
		<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
		<h1 class="a"><?php echo $rows['pname']; ?></h1>
		<div class="row mt-3">
			<div class="col-4">
			<div class="box1">
				
				
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width: 104%;height: 270px;">
			</div>
			</div>
		

			<div class="col-4">
			<div class="box">
		        <div class="imgBox">
		          <img src="<?php echo $rows['pi1']; ?>" alt="Taj Mahal Image" style="width: 104%;height: 270px;">
		        </div>
	        </div>
			</div>
			<div class="col-4">
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Taj Mahal Image" style="width: 100%;height: 270px;">
	        </div>
	      </div>
		  </div>
			</div>
					</div>
			<div class="description mt-4">
				
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
					<div class="col">
				<h5 style="color:RED; margin-top:7px" >₹ <?php echo $rows['package']; ?> </h5>
				</div>
				<div class="col">
				<a href="booking.html"><button type="button" class="btn btn-outline-success mb-3">BOOK</button></a>
				</div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				<div class="col"></div>
				
				</div>
			</div>
			
		
	        	<?php
					}
				?>
	      
		</div>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>