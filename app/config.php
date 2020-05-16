<?php

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "admin");
defined("DB_NAME") ? null : define("DB_NAME", "sms");

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

return $config = [
    'account_sid' => 'ACa8bf24355ff6de567862661bc958fee6',
    'auth_token' => '4e0d7af0729f8c4d202e67f86e652bb2',
    'phone_number' => '+12073832327'
];