<?php
require_once __DIR__.'/koneksi.php';

$searchOptions = [
    "minLength" => 2,
    "mode" => "and",
    "scoreKey" => "scoreKey",
    "algorithm" => \SleekDB\Query::SEARCH_ALGORITHM["hits"]
];

if(isset($argv[1])){
    $fields = $argv[1];
    echo "fields: $fields\n";
}

if(isset($argv[2])){
    $query = $argv[2];
    echo "query: $query\n";
}

if(isset($argv[2]) && isset($argv[2])){

    $hasil = $userStore->createQueryBuilder()
    ->search($fields, $query, $searchOptions)
    ->getQuery()
    ->fetch();
    
    echo "\n\n===mulai===\n\n";
    // print_r($hasil);
    // echo var_export($hasil,true);
    echo json_encode($hasil,JSON_PRETTY_PRINT);
    echo "\n\n===selesai===\n\n";
}
else{
    echo "cara pakai: ".basename(__FILE__)." [fields] [query]";
}

// $searchQuery = "Danang";
// $fields = ["Nama", "Alamat", "Email"];

// $result = $formulirStore->createQueryBuilder()
// ->search($fields, $searchQuery, $searchOptions)
// ->orderBy(["searchScore" => "DESC"]) // sort result
// ->except(["searchScore"]) // exclude field from result
// ->getQuery()
// ->fetch();

// print_r($result);

