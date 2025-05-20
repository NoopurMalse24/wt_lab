<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $position = $_POST['position'];

  $sql = "INSERT INTO employees (name, email, position) VALUES ('$name', '$email', '$position')";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.php?msg=Employee added successfully");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
