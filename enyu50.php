<?php
    session_start();
    $var1 = 12;
    $var2 = array(1,2,3);
    $var3 = false;
    $brad = new Brad;

    $_SESSION['var1'] = $var1;
    $_SESSION['var2'] = $var2;
    $_SESSION['var3'] = $var3;
    $_SESSION['brad'] = $brad;

    $brad->test = 34;

    $var1 = 34;


?>

<a href="enyu51.php?var1=<?php echo $var1; ?>var2=<?php echo $var2; ?>">enyu51</a>