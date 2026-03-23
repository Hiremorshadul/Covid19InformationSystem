<?php
@ob_start();
session_start();
error_reporting(0);
$db_host = getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost';
$con=mysqli_connect($db_host,'root','', 'filter_system');   
$pkg_amount=100;
$domain_name='morshadul.com';
$company_name = "Filter System";
?>
