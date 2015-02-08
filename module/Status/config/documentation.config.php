<?php
return array(
    'Status\\V1\\Rpc\\Ping\\Controller' => array(
        'GET' => array(
            'description' => 'this is my description for the get method',
            'request' => null,
            'response' => '{
   "ack": "Acknowledge the request with a timestamp"
}',
        ),
        'description' => 'this is my service description',
    ),
);
