<?php
$myfile = file("companycontacts.txt");


?>

<ul>
    <?php foreach ($myfile as $line) { ?>
        <li><?php echo $line ?></li>
    <?php }  ?>
</ul>
