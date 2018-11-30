<!DOCTYPE html>

<?php 
	$dbhost = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'webtasks';
    $conn = mysqli_connect($dbhost, $username, $password, $db);
   
	if(! $conn ){
		die('Could not connect: ' . mysqli_error());
	}
    
    if(isset($_GET['delete'])) {
        $query = "DELETE FROM cars WHERE ID=".$_GET['delete'];
          $result = mysqli_query($conn,$query);
      }
      if (isset($_GET['maker'])) {
       $query = "INSERT INTO cars (ID, maker, model, price, image, year)
       VALUES (NULL, '".$_GET['maker']."','".$_GET['model']."','".$_GET['price']."','".$_GET['url']."','".$_GET['year']."')";
       $result = mysqli_query($conn, $query);
      }
    $query = "SELECT * FROM cars";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);

?>

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
    <form action="task3.php" style="margin-right: 50px">
      <h1>Admin Page</h1>
      <table>
            <tr>
                <td>Maker: </td>
                <td><input type="text" name="maker">
            </tr>
            <tr>
                <td>Model:</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td><input type="number" name="year"></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Image(URL):</td>
                <td><input type="text" name="url"></td>
            </tr>
        </table>
        <input type="submit" value="Add new">
    </form>
    <div class="cars">
        <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='car'>";
            echo "<img src='" . $row['image'] . "' style='width: 100px; height: 60px'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['maker']. ' ' .$row['model']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Price:</div><div>"  .$row['price']. '$</div></div>';
            echo "<div class='row'><div class='name'>Year:</div><div>" .$row['year']. '</div></div>';
            echo "<div class='row'><a href='task3.php?delete=".$row['ID']."'  >Delete</a>"."</div></div></div></div>"; 
    }
        mysqli_close($conn);
        ?>
    </div>

  </body>

</html>

