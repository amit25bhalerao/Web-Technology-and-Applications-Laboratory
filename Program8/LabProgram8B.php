<?php
    $a = array(array(1,2,3), array(4,5,6), array(7,8,9));
    $b = array(array(9,8,7), array(6,5,4), array(3,2,1));
    $m = count($a);
    $n = count($a[2]);
    $p = count($b);
    $q = count($b[2]);

    echo "First Matrix Is Displayed Below"."<br/>";
    for($row = 0; $row < $m; $row++)
    {
        for($col = 0; $col < $n; $col++)
        {
            echo "".$a[$row][$col];
        }
        echo "<br/>";
    }

    echo "Second Matrix Is Displayed Below"."<br/>";
    for($row = 0; $row < $p; $row++)
    {
        for($col = 0; $col < $q; $col++)
        {
            echo "".$b[$row][$col];
        }
        echo "<br/>";
    }

    echo "The Transpose For The First Matrix Is Displayed Below"."<br/>";
    for ($row = 0; $row < $m; $row++) 
    {
        for ($col = 0; $col < $n; $col++)
        {
            echo " ".$a[$col][$row];
        }
        echo "<br/>";
    }

    echo "The Transpose For The Second Matrix Is Displayed Below"."<br/>";
    for ($row = 0; $row < $p; $row++) 
    {
        for ($col = 0; $col < $q; $col++)
        {
            echo " ".$b[$col][$row];
        }
        echo "<br/>";
    }
  
    if(($m === $p) and ($n === $q)) 
    {
        echo "The Addition Of Matrices Is Displayed Below"."<br/>";
        for ($row = 0; $row < 3; $row++) 
        {
            for ($col = 0; $col < 3; $col++)
            {
                echo " ".$a[$row][$col] + $b[$row][$col]." "; 
            }
        echo "<br/>";   
        }
    }
    else
    {
        echo "Addition Of Matrices Is Not Possible"."<br/>";
    }

    if($n===$p)
    {
        echo " The Multiplication Of Matrices Is Displayed Below"."<br/>";
        $result = array();

        for ($i=0; $i < $m; $i++) 
        {
            for($j=0; $j < $q; $j++)
            {
                $result[$i][$j] = 0;
                for($k=0; $k < $n; $k++)
                {
                    $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        }
            
        for ($row = 0; $row < $m; $row++)
        {
            for ($col = 0; $col < $q; $col++)
            {
                echo " ".$result[$row][$col];
            }
            echo "<br/>";
        }
    }
?>