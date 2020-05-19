<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'projectdb');
define('DB_USER', 'martina');
define('DB_PASS', 'atkinson');
function aaconnect_to_db()
{
    // DSN - the Data Source Name - requred by the PDO to connect
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    // attempt to create a connection to the database
    try {
        $connection = new PDO($dsn, DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        // deal with connection error
        print 'ERROR - there was a problem trying to create DB connection' . PHP_EOL;
        return null;
    }

    return $connection;
}






