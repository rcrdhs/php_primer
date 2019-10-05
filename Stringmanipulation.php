<?php
        $title = "String Manipulation";
        include "include/header.php"
?>

    <h1><?php echo $title?></h1>
    <?php 
    //Concatenation of strings
        $phrase1 = "Watashi wa anata ga kunren shite iru no o miru ";
        $phrase2 = "gochisosamdeshita";
        $name = "ricardo higgins";
        echo $phrase1 . ", well then, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String tansformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('Oye, ',5) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('Oye, ',5)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 2, 5).'<br/>';

        echo 'Get position of string: ' . strpos($name,'s').'<br/>';
        // Returns NULL 
        // echo 'Get position of string: ' . strpos($combine,'z').'<br/>';
        echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';
        echo 'Find Character "o": ' . strchr($name, 'o').'<br/>';
        echo 'Find Character "g": ' . strchr($name, 'g').'<br/>';

        echo 'Find Length of String: ' . strlen($name) .'<br/>';
        
        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("well", "so", $phrase2 ) . '<br/>';
        echo '<br/>';
        echo '<br/>';
        echo 'Phrase 1 translation - I see you are training!' . '<br/>';
        echo "Phrase 2 translation - It was a feast!";
    ?>
    
<?php 
    require "include/footer.php"
?>