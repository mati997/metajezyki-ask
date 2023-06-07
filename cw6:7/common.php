<?php

define("DATA_FILE", __DIR__ . "/data.json");

function getData() {
    if (!file_exists(DATA_FILE)) {
        return [];
    }

    return json_decode(file_get_contents(DATA_FILE), true);
}

function setData($value) {
    return file_put_contents(DATA_FILE, json_encode($value, JSON_PRETTY_PRINT));
}

function randomStr(
    int $length = 6,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

?>
