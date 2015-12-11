<?php

$address = '127.0.0.1';
$port =4544;

echo "\n Type your username:  ";
$user = trim(fgets(STDIN));
if (strlen($user) <= 2) {
    exit;
} else {
    while (1) {

        echo "\n Please say something or enter 'q' to quit:  ";
        $ticker = trim(fgets(STDIN));
        if ($ticker=='q') {
            exit;
        }

        $socket= socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket===false) {
            echo "Socket creation failed!";
        }
        $result = socket_connect($socket, $address, $port);
        if ($result===false) {
            echo "Socket connection failed!";
        } else {
            socket_write($socket, "$user says --> $ticker", 1024);
        }

        $input = socket_read($socket, 1024);
        echo "$input\n";
    }
}
