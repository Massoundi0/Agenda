<?php
/**
 * Created by PhpStorm.
 * User: DENISSE-BEN
 * Date: 18/02/2019
 * Time: 09:11
 */

$mysql_host = "localhost";
$mysql_login = "root";
$mysql_password = "";
$bd_name ="massoundi";
$c = mysqli_connect($mysql_host, $mysql_login,$mysql_password, $bd_name);
mysqli_set_charset($c, "utf8");
?>