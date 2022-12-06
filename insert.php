<?php
include 'db.php';

$sql = "INSERT INTO myguests (id, firstname, lastname, email)
VALUES (1,'John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>