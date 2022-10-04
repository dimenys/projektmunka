<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
	<title>Dimény Soma webáruháza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="p-5 bg-warning text-dark text-center">
  <h1>Dimény Soma webáruháza</h1>
  <p>Ambrus Kristóf, Kelemen Ádám, Lengyel Bálint, Dimény Soma</p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Minden termék</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategoria-1.php">Szénsavas viz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategoria-2.php">Szénsavmentes viz</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="kategoria-3.php">Energiaitalok</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="kategoria-4.php">Üditők</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategoria-5.php">Borok</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategoria-6.php">Pezsgők</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategoria-7.php">Sörök</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<table class="table table-striped">
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webaruhaz2";
//$dbname = "a saját adatbázis neve";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Kapcsolódási hiba: " . mysqli_connect_error());
}

$sql = "SELECT * FROM termek";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<tr>";
  
  echo 
   "<th>ID</th>" .
   "<th>Termék neve</th> ".
   "<th>Kategória</th> " .
   "<th>Termék ára </th>" .
   //"<th>Termék képe nagy</th> " .
   "<th>Foto</th>". 
   "<th>Mennyiség </th>";

   echo "</tr>";


  while($row = mysqli_fetch_assoc($result)) {
  
    echo "<tr>" ;

    echo "<td>" .$row["id"]. "</td>" .
     "<td>" .$row["termek_neve"]."</td>" .
     "<td>" .$row["kategoria"]."</td>" .
     "<td>" .$row["termek_ara"]."</td>" .
    "<td><img src=\"fotok/$row[termek_kepe_kicsi]\" alt=\"\" height=\"100\" widht=\"300\"  style=\"max-width=\"300\"\"></td>";

	 
    //"<td>" .$row["termek_kepe_nagy"]."</td>" .
     
	  //"<td>" .$row["termek_kepe_kicsi"]."</td>" .
	 
     echo "<td>" .$row["mennyiseg"]."</td>" ;
     echo "</tr>" ;

  }
} else {
  echo "0 találat";
}

mysqli_close($conn);
?>

</table>
</div>


<div class="mt-5 p-4 bg-warning text-dark text-center">
  <p>Footer</p>
</div>
</body>
<link rel="stylesheet" href="styles.css">
<html>