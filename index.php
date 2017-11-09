



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<h1>Hello Composer World~</h1>
<h1>哈囉~</h1>


</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: yvtc
 * Date: 2017/11/2
 * Time: 下午 03:26
 */

include_once __DIR__."/vendor/autoload.php";

use Carbon\Carbon;

printf(" %s", Carbon::now()->toDateTimeString());

?>



