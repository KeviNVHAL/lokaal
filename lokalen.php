<?php
$lokalen = [
    "lokaal 1" => [
        "lokaalnaam" => 2.056,
        "capaciteit" => 28
    ],
    "lokaal 2" => [
        "lokaalnaam" => 1.068,
        "capaciteit" => 32
    ],
    "lokaal 3" => [
        "lokaalnaam" => 1.028,
        "capaciteit" => 14
    ],
    "lokaal 4" => [
        "lokaalnaam" => 1.050,
        "capaciteit" => 25
    ],
    "lokaal 5" => [
        "lokaalnaam" => 1.036,
        "capaciteit" => 18
    ]
];

foreach ($lokalen as $lokaal){
    echo "Lokaal:" . " " . $lokaal["lokaalnaam"] . " " . "heeft een Capaciteit van" . " " . $lokaal["capaciteit"] .  " mensen"."<br>";
}