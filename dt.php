<?php
date_default_timezone_set('Asia/Kolkata');
$d=date("d-m-Y      h:i:s A");          //isme d,m ko capital m likhne p din btata h
echo $d."</br>";
$da=date(DATE_RFC822);        //gmt btata h
echo $da."</br>";

$dt=date(DATE_ATOM,mktime(0,0,0,10,3,1975));
echo $dt;
?>
