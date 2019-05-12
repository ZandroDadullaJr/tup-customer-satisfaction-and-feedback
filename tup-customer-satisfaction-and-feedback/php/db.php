<?php
// Connect to Database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tup_customer_satisfaction_and_feedback';
$hexdb = new mysqli($host,$user,$pass,$db) or die($mysqli->error);   	   