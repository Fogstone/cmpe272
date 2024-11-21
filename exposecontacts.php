<?php
$list_of_users = [
    "User1" => "user1@example.com",
    "User2" => "user2@example.com",
    "User3" => "user3@example.com"
];

// Output the list of users as a JSON string
header('Content-Type: application/json');
echo json_encode($list_of_users);
?>
