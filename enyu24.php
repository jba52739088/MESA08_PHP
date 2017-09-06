
<table border="1" width="100%">
<?php
    echo "<tr>";
        $i = 1;
        while($i <= 100){
            $isp = true;
            for($j=2; $j < $i/2; $j++){
                if($i % $j == 0){
                    $isp = true;
                }else{
                    $isp = false;
                    break;
                }
            }
            if ($isp){
                echo '<td>';
            }else{
                echo '<td bgcolor="yellow">';
            }
            echo $i;
            echo "</td>";
            if ($i % 10 == 0){
                echo "</tr>";
            }
            $i++;
        }
    echo "</tr>";
?>
</table>