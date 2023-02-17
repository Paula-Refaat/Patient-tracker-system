<?php
$reportdata = '';

$reportdata.= "FIRST NAME : ".$_POST['First_Name'] . "\n ";
$reportdata.= "Last NAME : " .$_POST['Last_Name'] . "\n";
$reportdata.= "Phone number : ".$_POST['Mobile_Number'] . "\n";
$reportdata.= "blood type : " .$_POST['bt'] . "\n";
$reportdata.= "medical condition  : " .$_POST['mc'] . "\n";
$reportdata.= "admittance_date : " .$_POST['ad'] . "\r\n";
$reportdata.= "follower doctor : " .$_POST['fd'] . "\r\n".PHP_EOL;



header('Content-Type:text/plain'); 
header('Content-Disposition: attachment; filename="report.txt"');
echo ($reportdata);

