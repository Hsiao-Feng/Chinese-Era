<!DOCTYPE html>
<html>
<head><meta charset="utf-8"/><meta name="viewport" content="width=device-width, user-scalabel=no"/><title>天干地支纪年法</title></head>
<body style="background-color:#e4e4e4;">
<h1>
<?php
    if(!isset($_GET['n'])){
        echo 'Error.';
        exit;
    }
    $year_num=$_GET['n'];
    $last=substr($year_num, -1);
    $first=Abs($year_num % 12);
    echo $year_num.'年是';
    switch($last){
        case 0:
        echo '庚';
        break;
        case 1:
        echo '辛';
        break;
        case 2:
        echo '壬';
        break;
        case 3:
        echo '癸';
        break;
        case 4:
        echo '甲';
        break;
        case 5:
        echo '乙';
        break;
        case 6:
        echo '丙';
        break;
        case 7:
        echo '丁';
        break;
        case 8:
        echo '戊';
        break;
        case 9:
        echo '己';
        break;
    }
    switch($first){
        case 0:
        echo '申 猴';
        break;
        case 1:
        echo '酉 鸡';
        break;
        case 2:
        echo '戌 狗';
        break;
        case 3:
        echo '亥 猪';
        break;
        case 4:
        echo '子 鼠';
        break;
        case 5:
        echo '丑 牛';
        break;
        case 6:
        echo '寅 虎';
        break;
        case 7:
        echo '卯 兔';
        break;
        case 8:
        echo '辰 龙';
        break;
        case 9:
        echo '已 蛇';
        break;
        case 10:
        echo '午 马';
        break;
        case 11:
        echo '未 羊';
        break;
    }
    echo '年。';
?>
</h1>
</body>
</html>