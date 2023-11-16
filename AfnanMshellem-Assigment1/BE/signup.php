<?php


function VarExist($var){
    if (isset($var)){
        return $var;
    } else {
        header("location:../pages/login.php");
    }
}

$user = new stdClass();

$user->un = VarExist($_POST["username"]);
$user->fn = VarExist($_POST["firstname"]);
$user->ln = VarExist($_POST["lastname"]);
$user->pass = VarExist($_POST["pass"]);
$user->sex = VarExist($_POST["sex"]);
$user->age = VarExist($_POST["birthday"]);

// Load existing user data from the JSON file
$file_path = "../dynamicData/users.json";
$current_data = file_get_contents($file_path);
$users = json_decode($current_data, true);

// Add the new user to the array
$users[] = [
    "username" => $user->un,
    "firstname" => $user->fn,
    "lastname" => $user->ln,
    "password" => $user->pass,
    "sex" => $user->sex,
    "dob" => $user->age,
];

// Save the updated user data back to the JSON file
file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

// Redirect to login page
header("location:../pages/login.php");

