<?php
@ob_start();
session_start();
error_reporting(0);
$con=mysqli_connect('localhost','root','', 'filter_system');   
$pkg_amount=100;
$domain_name='morshadul.com';
$company_name = "Filter System";
?>
