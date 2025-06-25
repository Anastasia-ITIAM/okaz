<?php
try {
    $config = parse_ini_file($_SERVER["DOCUMENT_ROOT"] . "/.env");

    $dsn = "mysql:dbname={$config['db_name']};host={$config['db_host']};charset=utf8mb4";
    if (!empty($config['db_port'])) {
        $dsn .= ";port={$config['db_port']}";
    }

    $pdo = new PDO($dsn, $config['db_user'], $config['db_password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
