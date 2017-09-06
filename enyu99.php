<html>
<head>


</head>

<body>
<table border="1" width="100%">
<?php

    for ($p = 0; $p < 2; $p++) {
        echo "<tr>";
        for ($j = 2 + $p * 4; $j <= 5 + $p * 4; $j++) {
            if (($j + $p) %2 == 1) {
                $x = "yellow";
            } else {
                $x = "orange";
            }
            echo "<td bgcolor=' $x '>";
            for ($k = 1; $k <= 9; $k++) {
                $r = $j * $k;
                echo "{$j} X {$k} = {$r}<br>";
            }
            echo "</td>";
        }
    }
echo "</tr>";

?>








    </table>

</body>
</html>