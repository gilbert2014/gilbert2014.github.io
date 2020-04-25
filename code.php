<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "adminpanel");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['registerbtn']))
{
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $usertype = $_POST['usertype'];

$sql = "INSERT INTO register (username,email, password,usertype)
VALUES ('$username', '$password', '$email','$usertype');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
    echo "<a href='$register.php'>register</a>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>