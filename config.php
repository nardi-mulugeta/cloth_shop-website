<?php

$conn = mysqli_connect('localhost','root','','cloth_db') or die('connection failed');


// Admin user details
// $adminName = 'Admin1';
// $adminEmail = 'admin1@gmail.com';
// $adminPassword = '24680246';

// // Hash the admin password
// $hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

// // Prepare the SQL query
// $sql = "INSERT INTO `users` (
//     `name`,
//     `email`,
//     `password`,
//     `user_type`
// ) VALUES (
//     '$adminName',
//     '$adminEmail',
//     '$hashedPassword',
//     'admin'
// )";

// // Execute the SQL query
// if (mysqli_query($conn, $sql)) {
//     echo "Admin user added successfully.";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


?>