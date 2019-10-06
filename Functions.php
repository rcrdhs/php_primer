<?php
        $title ="Functions";
        include "include/header.php"
?>
    <h1> <?php echo $title?></h1>

    <?php
        /*Defining a function*/

        function writeMesaage(){
            echo "We will, we will, rock you! <br/>";
        }

        /*Calling a function*/
        writeMesaage();
        echo "<hr/>";
        writeMesaage();

        /*Functions with parameters*/
        function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                $num2 = $num2 + 1;
                echo "The sum of $num1 and $num2 is: $sum <br/>";
                }
                function changeNum (&$num){
                    $num = $num +30;
                }
                function returnProduct($num1, $num2){
                    $prod = $num1 * $num2;   
                    return $prod;
                }
                $num = 685;
                addFunction (152, 25);
                addFunction (55, $num);
                addFunction ('10', "80");

                changeNum($num);
                echo $num . "<br/>";

                $return_val = returnProduct(78, 45);
                echo $return_val . "<br/>";
    ?>

<?php 
    require "include/footer.php"
?>