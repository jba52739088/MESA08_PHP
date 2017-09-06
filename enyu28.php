<?php
    $fp = fopen("./dir1/file1",'r');
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//    echo fread($fp,1);
//
    while ($i = fread($fp,1)){
        echo $i;
    }
    fclose($fp);


    echo "<hr>";


    $fp = fopen("./dir1/file1",'r');
    while ($line = fgets($fp)){
        echo $line;
    }
    fclose($fp);



echo "<hr>";


    $fp = fopen("./dir1/treev2.csv",'r');
    $line = fgets($fp);
    $line = fgets($fp);
    $row = explode(',',$line);
    foreach ($row as $v){
        echo "{$v}<br>";
    }

fclose($fp);


echo "<hr>";


$fp = fopen("http://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=fef1fad4-2abd-4b71-b623-d4180dbd5695&rid=007821fe-dc81-41cc-abb1-71903fb6e540",'r');
$line = fgets($fp);
$line = fgets($fp);
//$line = iconv("BIG5",UTF-8,$line);
$row = explode(',',$line);
foreach ($row as $v){
    echo "{$v}<br>";
}

fclose($fp);
