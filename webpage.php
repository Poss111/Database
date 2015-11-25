<?php
  $servername = "csci440.cs.montana.edu/phpmyadmin/index.php";
  $username = "leh";
  $password = "google14";
  $dbname = "poss";

  $conn = new php_mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM Beer";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
?>
