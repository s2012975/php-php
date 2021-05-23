<!DOCTYPE html>
<html>
<head>
<meta charaset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

try
{

$staff_name = $_POST['name'];
$staff_pass = $_POST['pass'];

$staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
$staff_PASS = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');

$dsn = 'mysql:dbname = shop;host = localhost;charset = utf8';
$user = 'root';
$password = '';
$dbh = new POD(dsn, $user, $password);
$dbh -> setAttribute(PDO::ATTR_ERRMODE, POD::ERRMODE_EXCEPTION);

</body>
</html>
