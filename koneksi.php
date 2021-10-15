<?php
require_once __DIR__.'/vendor/autoload.php';

//atur direktori database
define('DB_DIR',__DIR__ . "/myDatabase");

$konfigurasi = [
    "auto_cache" => true,
    "cache_lifetime" => null,
    "timeout" => false, // deprecated! Set it to false!
    "primary_key" => "_id",
    "search" => [
        "min_length" => 2,
        "mode" => "or",
        "score_key" => "scoreKey",
          "algorithm" => \SleekDB\Query::SEARCH_ALGORITHM["hits"]
        ]
    ];

//formulir store
$formulirStore = new \SleekDB\Store("formulir", DB_DIR, $konfigurasi);

//user store
$userStore = new \SleekDB\Store("user",DB_DIR,$konfigurasi);
