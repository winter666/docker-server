<?php
$db_host = 'db';
$db_port = '3306';
$db_username = 'root';
$db_password = 'password';
$db_name = 'test_db';
$dns = "mysql:host={$db_host};port={$db_port};dbname={$db_name}";
?>

<?= dbConnection($dns, $db_username, $db_password); ?>
