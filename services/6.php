<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Земельні та житлові спори</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
 <div class="leftcol">
 <img src="../img/l11.jpg" width="270" height="400"><br>
 Огородник Максим<br>
 Учасник Ради адвокатів Рівненської області 
 </div>
 <div class="rightcol"> 
 <img src="../img/l12.jpg" width="300" height="400"><br>
 Мельничук Єлизавета<br>
 Учасник Ради адвокатів Рівненської області 
 </div>
<div class="emplbody">
<div class="table">
<?php require_once "../dbconnect.php";
$sql = "SELECT s_name, price FROM services WHERE s_id = '6'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>Послуга</th><th>Ціна</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["s_name"]. "</td> 
				<td>" . $row["price"]. "</td></tr>";
  }
} else {
  echo "0 results";}
  
$sql = "SELECT * FROM lawyers WHERE l_id = '11' OR l_id = '12'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th colspan=2>Адвокати у цій сфері:</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["l_name"]. "</td> 
				<td>Стаж роботи: " . $row["experience"]. "</td></tr>";
  }
} else {
  echo "0 results";}
  
  $conn->close();
?>
</div>
</div>
</body>
</html>