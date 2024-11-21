<?php
// Define a local array with contact information
$contacts = [
    "John Doe - john.doe@example.com",
    "Jane Smith - jane.smith@example.com",
    "Alice Johnson - alice.johnson@example.com"
];
?>

<ul>
    <?php foreach ($contacts as $contact) { ?>
        <li><?php echo $contact; ?></li>
    <?php } ?>
</ul>
