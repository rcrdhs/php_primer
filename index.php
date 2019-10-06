<?php 
$title ="Index/Home";
include 'include/header.php'
?>

    <h1>Hail Fan - Praise me</h1>

<?php 
    echo "PHP stuffs.";
    echo "<br/>";
    echo "Second Line";
    echo "<br/>";

    $name = "Ricardo Higgins";
    $age = 32;
    echo $name;

    echo "<h1>My Name Is: ".$name."</h1>";
    echo "<h1>My Age Is: $age </h1>";
?>

    <button type="button" class="btn btn-danger">Click me</button>
<?php
    require "include/footer.php"
?>

