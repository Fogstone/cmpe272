<?php
// users_A.php

header('Content-Type: application/json');

// Local array of users for Company A
$list_of_users_A = [
    ['id' => 1, 'name' => 'Alice'],
    ['id' => 2, 'name' => 'Bob']
];

// Return the user list as JSON
echo json_encode($list_of_users_A);
?>
