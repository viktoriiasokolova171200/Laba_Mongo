<?php

$client = new MongoDB\Client
(
    'mongodb+srv://<user1>:<1111>@<cluster-address>/computer?retryWrites=true&w=majority'
);

$db = $client->computer;