<?php
$title = "IfStatement";
include 'includes/header.php'
?>
<h1 style="color:red"> <?php echo $title ?></h1>
    <?php
    echo '<h2> If Statement </h2>';

    $grade = 80;

    if($grade >= 50)
    {
        echo ' <h3 style="color:green"> You Have Passed </h3>';
    }
    else{
        echo ' <h3 style="color:red"> You Have Failed </h3>';

    }
    $grade = 'A';

    if($grade == 'A'){
        echo '<h2> Superb </h2>';
    }
    elseif($grade == 'B'){
        echo '<h2> Well done </h2>';
    }
    else{
        echo '<h2> Failed </h2>';
    }
    ?>
<?php require 'includes/footer.php' ?>