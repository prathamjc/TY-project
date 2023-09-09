<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();

// Check if the form has been submitted
if (isset($_POST['submit'])) {

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ebook site";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Retrieve the form data
  $name = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $confirm_password = $_POST['cpass'];

  // Validate the form data
  if ($password != $confirm_password) {
    die("Error: Passwords do not match");
  }

  

  // Prepare the SQL statement
  $sql = "INSERT INTO users (username, email, password)
  VALUES ('$username', '$email', '$password')";

  // Execute the SQL statement
  if (mysqli_query($conn, $sql)) {
    // Get the user ID of the newly inserted record
    $user_id = mysqli_insert_id($conn);

    // Redirect to the home page
    header("Location: http://localhost/ebook site/login form.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
}

?>
