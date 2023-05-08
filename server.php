<?php
    $string_value = file_get_contents("dischi.json");
    // var_dump($string_value);
    $dischi_array = json_decode($string_value, true);
    // var_dump($dischi_array);

    $response = [
        "results" => $dischi_array
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
?>