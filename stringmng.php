<?php
$title = "StringManipulate";
include 'includes/header.php'
?>
<h1><?php echo $title ?></h1>
    <?php
        $phrase1 = "Student who came late ";
        $phrase2 = "in class, stand with Rock";
        $name = "trevoir williams";
        echo $phrase1 ." ,named tiffany, " .$phrase2;
        echo '</br>';   
        echo '<hr/>';

        // string transform
        echo 'Uppercase first letter: '. ucfirst($name).'</br>';
        echo 'Uppercase first letter of each: '. ucwords($name).'</br>';
        echo 'Upper case : '. strtoupper($name).'</br>';
        echo 'lower case : '. strtolower('ALL ARE IN UPPER').'</br>';
        echo '<hr/>';
        echo 'Repeast String:' . str_repeat('a', 10) . '</br>';
        echo 'Repeast String-nestedfunction:' . strtoupper(str_repeat('a', 10)) . '</br>';
        echo 'Get a Substring:' . substr($name,5, 10) . '</br>';
        echo 'Get position of string:' . strpos($name,'w') . '</br>';


        echo 'Find Character "R" : ' . strchr($name, 'R'). '</br>'; 
        echo 'Find Character "r" : ' . strchr($name, 'r'). '</br>'; 
        echo 'Find Character "s" : ' . strchr($name, 's'). '</br>'; 
        echo 'Find Character "e" : ' . strchr($name, 'e'). '</br>'; 

    ?>
<?php require 'includes/footer.php' ?>