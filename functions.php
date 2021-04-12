<?php
$title = "Functions";
include 'includes/header.php'
?>
    <h1> <?php echo $title ?> </h1>

    <?php

    function writeMessage(){
        echo "you are really a nice person";
    }

    writeMessage();
    
    echo "<hr/>";
    writeMessage();

    // functions with parameters

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }

    addFunction(10, 20);

    ?>
<?php require 'includes/footer.php' ?>