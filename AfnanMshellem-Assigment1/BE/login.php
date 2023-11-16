<?php
// session_start();

// Check if username and password are set in the POST data
// if (isset($_POST["username"]) && isset($_POST["pass"])) {
//     $un = $_POST["username"];
//     $pass = $_POST["pass"];

//     // Specify the path to your JSON file
//     $filePath = '../dynamicData/users.json';

//     // Check if the file exists and can be opened
//     if (file_exists($filePath) && is_readable($filePath)) {
//         $fileContents = file_get_contents($filePath);
//         $users = json_decode($fileContents, true);

//         if ($users === null) {
//             // Error decoding JSON
//             echo "Error decoding JSON data.";
//             exit;
//         }

//         $loggedIn = false;

//         foreach ($users as $user) {
//             // Check if the entered username and password match
//             if ($un == $user["username"] && $pass == $user["password"]) {
//                 $loggedIn = true;
//                 break;
//             }
//         }

//         // Redirect based on login status
//         if ($loggedIn) {
//             session_start();
//             $_SESSION["username"] = $un;
//             header("location:../indexPage.php");
//         } else {
//             // echo "Login failed. Username or password is incorrect.";
//             header("location:../pages/login.php");
//         }
//     } else {
//         echo "Error: Unable to open the JSON file.";
//     }
// } else {
//     echo "Error: Missing username or password in the POST data.";
// }


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_path = "../dynamicData/users.json";

    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Load existing user data
    $current_data = file_get_contents($file_path);
    $users = json_decode($current_data, true);

    // Check if the username and password match
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["pass"] === $password) {
            // Set session variable to store the username
            $_SESSION["username"] = $username;

            // Redirect to the main page after successful login
            header("Location:../indexPage.php");
            exit();
        }
    }

    // If no match is found, redirect to login page with an error message
    header("Location:../pages/login.php");
    exit();
} else {
    // If the request method is not POST, redirect to login page
    header("Location:../pages/login.php");
    exit();
}
?>