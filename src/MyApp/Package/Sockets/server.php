<?php

set_time_limit(0);

$NULL           = null;
$address        = "127.0.0.1";
$port           = 4545;
$max_clients    = 10;
$client_sockets = array();
$master         = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$res            = true;

$res &= @socket_bind($master, $address, $port);
$res &= @socket_listen($master);

if (!$res) {
    die("Unable to bind and listen $address: $port\n");
} else {
    echo "Connection to server...Ok";
}

$abort = false;
$read = array($master);

while (!$abort) {
    $num_changed = socket_select($read, $NULL, $NULL, 0, 10);
    /* Anything changed? */
    if ($num_changed) {
        /* Is new connection */
        if (in_array($master, $read)) {
            if (count($client_sockets) < $max_clients) {
                $client_sockets[]= socket_accept($master);
                echo "Connection accepted (" . count($client_sockets)  . " of $max_clients clients)\n";
            }
        }
        /* Loop through all customers checking changes in each of them*/
        foreach ($client_sockets as $key => $client) {
            /* New data in client socket? Read and answer*/

            if (in_array($client, $read)) {
                $input  = socket_read($client, 1024);
                $input_f = $input;
                echo "$input\n";
                if ($input === false) {
                    socket_shutdown($client);
                    unset($client_sockets[$key]);
                } else {
                    $input = trim($input);

                    if (!@socket_write($client, "You said: $input\n")) {
                        socket_close($client);
                        unset($client_sockets[$key]);
                    }
                }
                if ($input == 'exit') {
                    socket_shutdown($master);
                    $abort = true;
                }
            }// END IF in_array
        } // END FOREACH
        send_Message($client_sockets, $master, $input_f);
    } // END IF ($num_changed)
    $read = $client_sockets;
    $read[] = $master;
} // END WHILE


function send_Message($allclient, $socket, $buf)
{
    echo 'sending message to '.count($allclient)." clients: \n";
    $msg = "<mbFeed>$buf</mbFeed>\n\0";
    foreach ($allclient as $client) {
        socket_write($client, $msg, 1024);
    }
}