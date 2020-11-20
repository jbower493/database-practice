<?php

// Create connection
$conn = new mysqli('localhost', 'wordpress', 'jamiewordpress', 'test');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $myArray[] = $row;
  }
  echo json_encode($myArray);
} else {
  echo "0 results";
}

?>