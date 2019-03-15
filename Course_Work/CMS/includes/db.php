<?php

// connection info

$db['db_host'] = 'localhost';
$db['db_user'] = 'cms';
$db['db_password'] = 'cms';
$db['db_name'] = 'cms';

// make constants
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>