<?php
if (isset($_REQUEST['error'])){
    echo '請輸入正確資料';
}
?>

<script>
    function checkForm() {
//        return false;
        return true;
    }
</script>

<form action = "enyu20.php" method="post">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" name="what" value="OK">        <!--由此推論出submit會送出有name的-->
    <input type="submit" name="what2" value="OK2">      <!--由此推論出按哪個submit會送出有哪個name的submit-->
    <input type="submit" name="what" value="OK3">       <!--由此推論出按不同的submit會送出有不同的value的submit-->
</form>
<hr />

<!--    Event ==> onXxx ="處理事件(JS)"   -->

<!--<form action = "enyu21.php" onsubmit="return false;">-->
<form action = "enyu21.php" onsubmit="checkForm();" method="get">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" value="OK">
</form>

<hr />

<form action = "enyu20.php" method="get">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="radio" name="gender" value="m" checked>Male  <!--checked 預設，不然沒選後端收不到值-->
    <input type="radio" name="gender" value="f">Female
    <br>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打電玩
    <input type="checkbox" name="like[]" value="3">打麻將<br>
    <input type="checkbox" name="like[]" value="4">打籃球
    <input type="checkbox" name="like[]" value="5">打毛球
    <input type="checkbox" name="like[]" value="6">打屁孩<br>
    <section name="area">
        <option value="401">北屯區</option>
        <option value="402">南屯區</option>
        <option value="403">西屯區</option>
    </section><br>
    <textarea name="memo" rows="10" cols="40"></textarea><br>
    <input type="file" name="upload" />
    <input type="submit" name="what" value="OK">
    <input type="submit" name="what" value="OK2">
</form>
<hr>
<form action="enyu22.php">
    <input type="text" name="account">
    <br>
    <input type="submit" value="OK">
</form>