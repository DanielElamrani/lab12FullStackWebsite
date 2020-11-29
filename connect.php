<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
  if (!empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "lab12";


// Creating the connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
  . mysqli_connect_error());
 }
else{
  $sql = "INSERT INTO login (username, password)
  values ('$username','$password')";
  if ($conn->query($sql)){
  echo "A new record has been inserted sucessfully, good job";
}
else{
  echo "ErrorErrorError: ". $sql ."
  ". $conn->error;
}
$conn->close();
}
}
else{
echo "Password can't be empty";
die();
}
}
else{
echo "Username can't be empty";
die();
}
?>
