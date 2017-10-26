<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello | PHP</title>
</head>
<body>

<?php
$begin = 16;
$end = 22;

for( $i=$begin; $i<=$end; $i+=2)
{
    echo "<p style=\"font-size:".$i."pt\">PHP Example</p>";
}

?>


<h1>Hello World~ from php</h1>
<h1>哈囉~ from php</h1>

<?php
    echo "This is after hypertext preprocessor!<br>";
//    等同底下 html 的內容
?>
This is after hypertext preprocessor!<br>

<table border="0" cellpadding="0" cellspacing="0" width="1180">
    <tbody>
    <tr>
        <td height="10"></td>
    </tr>
    <tr>
        <td>
            <div class="homebanner" id="BannerSlideShow">
                <?php
                $url = ["https://tw.yahoo.com", "http://homestead.app/connectToMySQL.php"];
                for( $i=0; $i<2; $i++)
                {
                    echo "<a target='_blank' href=$url[$i]><img/>test</a><br>";
                }
                ?>
<!--                <a target="_blank" href="https://www.lativ.com.tw/OnSale/1P499/WOMEN" onclick="$.common.statisticClick(1367482)">-->
<!--                    <img src="https://s4.lativ.com.tw/i/ProductShow/32828_1P499_1180X557_171003_TW.jpg" width="1180" height="557"alt="" />-->
<!--                </a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/OnSale/1P50D/WOMEN" onclick="$.common.statisticClick(1367624)">-->
<!--                    <img src="https://s1.lativ.com.tw/i/ProductShow/1P50D_1180X557_171003_TW3.gif" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/OnSale/1P99" onclick="$.common.statisticClick(1367634)">-->
<!--                    <img src="https://s2.lativ.com.tw/i/ProductShow/1P99CD_1180X557_171003_TW.gif" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/Page/edm20171003ad?pid=17100338" onclick="$.common.statisticClick(1367534)">-->
<!--                    <img src="https://s3.lativ.com.tw/i/ProductShow/EDM_1180X557_171002_tw.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/Search/Index?keyWord=32730+32731+30253+30943+30254+32412+30345+32434+30360+30354+32739+30305+30277+32228+32352+30287" onclick="$.common.statisticClick(1367352)">-->
<!--                    <img src="https://s4.lativ.com.tw/i/ProductShow/Moon_1180X557_170929_TW.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/Page/edm20170916ad" onclick="$.common.statisticClick(1367471)">-->
<!--                    <img src="https://s1.lativ.com.tw/i/ProductShow/FS588_1180X557_171003_TW.gif" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/ThemedOutfit/holiday" onclick="$.common.statisticClick(1367221)">-->
<!--                    <img src="https://s2.lativ.com.tw/i/ProductShow/vacation_1180X557_170923_TW2.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                <a target="_blank" href="https://www.lativ.com.tw/OnSale/SPORTS" onclick="$.common.statisticClick(1367477)">-->
<!--                    <img src="https://s3.lativ.com.tw/i/ProductShow/30163_99up_1180X557_171003_TW2.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
            </div>
            <div class="slide-pager">
                <a class="pager-first" data-slide-index="0"></a>
                <a data-slide-index="1"></a>
                <a data-slide-index="2"></a>
                <a data-slide-index="3"></a>
                <a data-slide-index="4"></a>
                <a data-slide-index="5"></a>
                <a data-slide-index="6"></a>
                <a data-slide-index="7"></a>
            </div>
        </td>
    </tr>
    <tr>
        <td height="10">
            <img src="https://s.lativ.com.tw/i/Page/images/blank.gif" /></td>
    </tr>
    <tr></tr>
    </tbody>
</table>


</body>
</html>