<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3x+1 Problem Esra Karakaş</title>
</head>
<body>
    <form action="./3x+1.php" method="post">
        <label for="number"><h2>Please enter a number greater than 1</h2></label>
        <input type="number" name="number" id="number">

        <button type="submit">Calculate</button>
    </form>
</body>
</html>

<?php
    //I have tested most of the numbers in the examples found on Wikipedia and the algorithm I wrote calculates them all correctly.
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $x = $_POST["number"];
        $y = 0;

        if($x>1){
            echo "<h3>Starting 3x+1 algorithm, the number is <span style='color: orangered;'>$x</span> <br/></h3>";
            while($x>1){
                if($x%2===0){
                    $x/=2;
                }
                else{
                    $x=(3 * $x) + 1;
                }
                $y++;
                echo "<span style='color: orangered;'>Step $y :</span> Number is $x <br/>";
            }
            echo "<h3>Algorithm finished in <span style='color: orangered;'>$y</span> steps.</h3> <br/>";
        }else{
            echo "<h3>The number must be greater than 1.</h3><br/>";
        }
    }  
?>