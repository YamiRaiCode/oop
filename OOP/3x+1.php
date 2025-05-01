<?php
        
        $x =27;
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
?>