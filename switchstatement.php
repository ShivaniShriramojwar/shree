<?php
$title = "SwitchStatement";
include 'includes/header.php'
?>
    <h1><?php echo $title ?> </h1>
    <?php

    $grade = 'c';
    switch($grade){
        case 'A':
            echo '<h2> Superb</h2>';
            break;
        case 'B':
            echo '<h2> Well Done</h2>';
            break;
        default:
            echo 'Failed';
    }
    ?>
<?php require 'includes/footer.php' ?>