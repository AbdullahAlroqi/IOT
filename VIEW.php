
<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 
   <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>View page</title>
  <style>
  div{

          
        width: auto;
          margin: auto;
          border: 1px solid #ffffff;
          text-align: center;
    }
 #head {
  background: url(mm.png) right bottom no-repeat, url(images.png) left top repeat;
  padding: 24px;
}

#titel{
text-align: right;
margin: 10px;
width: 1400px;
}

    

  </style>
</head>

<body >




<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"task1");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>



<div class="container">   
<form action="View.php" method="post">
  

  <input type="submit" name="ref" value="Refresh">

</form> 
 ARM       
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ARM 1</th>
        <th>ARM 2</th>
        <th>ARM 3</th>
        <th>ARM 4</th>
        <th>ARM 5</th>
        <th>ARM 6</th>
        <th>ON/OFF</th>
      </tr>
    </thead>
    <tbody>
<?php  
$sql = "SELECT  * FROM robot_arm ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
      echo " <td>".$row["arm1"]."</td>";
      echo " <td>".$row["arm2"]."</td>";
      echo " <td>".$row["arm3"]."</td>";
      echo " <td>".$row["arm4"]."</td>";
      echo " <td>".$row["arm5"]."</td>";
      echo " <td>".$row["arm6"]."</td>";
      echo " <td>".$row["start"]."</td>";
      echo "</tr>";
      
    }
  }
?>



    </tbody>
  </table>
</div>

 
</body>
</html>

