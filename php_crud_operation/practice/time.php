<?php
echo date('d/m/Y',strtotime('first day of this month'));

$date="12/12/2020";
$result=explode("/",$date);
var_dump(checkdate($result[1],$result[0],$result[2]));


date_default_timezone_set('Asia/Jakarta');
echo "tangal=".date('l, d-M-Y / H:i:s a');