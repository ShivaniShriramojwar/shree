<?php
$title = "While and Do While";
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
<?php
$grade = 0;

// while($grade < 10){
//     echo '<p> IM Less Thans 10</p>';
// }


// while is a precondition
while($grade < 10){
    echo '<p> IM Less Thans 10</p>';
    $grade++;
}
echo 'EXIT Loop';
?>


<!-- do while is a post condition -->
    <h1> DoWhile Loop</h1>
<?php
$grade = 0;
do{
    echo '<p> IM Less Thans 10</p>';
    $grade++; 
}while ($grade < 10);


?>

<?php require 'includes/footer.php' ?>