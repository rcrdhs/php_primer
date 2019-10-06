<?php
        $title ="For Loop";
        include "include/header.php"
?>
    <h1><?php echo $title?></h1>

    <?php 
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }
        
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        }
    ?>
<?php 
    require "include/footer.php"
?>