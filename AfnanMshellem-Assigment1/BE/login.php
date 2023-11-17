<?php
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
            header("Location:../index.php");
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