<html>
    <head>

        <style>
            table, td, th
            {
                border: 1px solid black;
                width: 33%;
                text-align: center;
                background-color: cornsilk;
            }
            table {margin: auto;}
            input, p {text-align: right;}
        </style>

    </head>

    <body>
        
        <form method="post">
            <table>
                <caption><h2>Simple Calculator</h2></caption>
                
                <tr>
                    <td>First Number</td><td><input type="text" name="num1"></td>
                    <td rowspan="2"><input type="submit" name="submit" value="calculate"></td>
                </tr>

                <tr>
                    <td>Second Number</td><td><input type="text" name="num2"></td>
                </tr>
        </form>

        <?php
        if(isset($_POST['submit']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if(is_numeric($num1) and is_numeric($num2))
            {
                echo "<tr><td>Addition</td><td><p>".($num1+$num2)."</p></td>";
                echo "<tr><td>Subtraction</td><td><p> ".($num1-$num2)."</p></td>";
                echo "<tr><td>Multiplication</td><td><p>".($num1*$num2)."</p></td>";
                echo "<tr><td>Division</td><td><p> ".($num1/$num2)."</p></td>";
                echo "</table>";
            }
            else
            {
                echo "<script type='text/javascript'> 
                      alert('Enter Valid Number');
                      </script>";
            }
        }
        ?>    
    </body>
</html>

_______________________________________________________________________________________________________________________________________________________________________

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
