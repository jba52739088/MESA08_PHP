<?php

$month = $year = $result = " ";
if (isset($_GET['x'])) {
    $year = $_GET['x'];
    $month = $_GET['y'];
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $result = "31天";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $result = "30天";
            break;
        case 2:
            if ($year % 4 == 0){
                if ($year % 100 == 0){
                    if ($year % 400 == 0){
                        $result = "29天";
                    }else{
                        $result = "28天";
                    }
                }else{
                    $result = "29天";
                }
            }else{
                $result = "28天";
            }
    }

}
?>

<form>
    <input type="text" name="x" value="<?php echo $year; ?>"/>
    年
    <input type="text" name="y" value="<?php echo $month; ?>"/>
    月
    <input type="submit" value="查詢" />
    <hr />
    <?php echo "<br>$result" ?>
</form>
