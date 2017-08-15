<?php
$relationships = getenv("PLATFORM_RELATIONSHIPS");
$relationships = json_decode(base64_decode($relationships), TRUE);

$mysql = $relationships['database'][0];
$redis = $relationships['redis'][0];

$parameters = [
    "api_enabled"           => true,
    "db_driver"             => "pdo_mysql",
    "db_host"               => $mysql['host'],
    "db_port"               => $mysql['port'],
    "db_name"               => $mysql['path'],
    "db_user"               => $mysql['username'],
    "db_password"           => $mysql['password'],
    "db_table_prefix"       => "",
    "locale" => 'de',
    "secret"                => getenv("PLATFORM_PROJECT_ENTROPY"),
    "default_pagelimit"     => 10
];

//no redis yet