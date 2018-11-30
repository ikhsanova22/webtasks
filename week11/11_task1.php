<!DOCTYPE html>
<html>

  <head>
	<style>
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>

  <body>
    <div class="cars">
      <div class="car">
        <img width="100" height="60" src="https://toyota.com.my/ToyotaOfficialWebsite/media/ToyotaMedia/model/Camry%202.0/2016/colors_camry_grey.jpg"/>
	      <div class="right">
		<div class="title">Toyota Camry 50</div>
		<div class="attributes">
		  <div class="row"><div class="name">Year:</div><div>2011</div></div>
		  <div class="row"><div class="name">Price:</div><div>30.000$</div></div>            
		  </div>
		</div>
	      </div>
    </div>

  </body>

</html>

<?php 
	$dbhost = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'webtasks';
  $conn = mysqli_connect($dbhost, $username, $password, $db);
   
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
	$query = "SELECT * FROM cars";
	$result = mysqli_query($conn, $query);
	$num = mysqli_num_rows($result);

	for ($i = 0; $i < $num; $i++) {
		$row = mysqli_fetch_assoc($result);
		echo "<div class='car'>";
		echo "<img src='" . $row['image'] . "' style='width: 100px; height: 60px'>";
		echo "<div class='right'>";
		echo "<div class='title'>" .$row['maker']. ' ' .$row['model']. '</div>';
		echo "<div class='attributes'>";
		echo "<div class='row'><div class='name'>Price:</div><div>"  .$row['price']. '$</div></div>';
		echo "<div class='row'><div class='name'>Year:</div><div>" .$row['year']. '</div></div></div></div></div>'; 
  }
	mysqli_close($conn);

?>