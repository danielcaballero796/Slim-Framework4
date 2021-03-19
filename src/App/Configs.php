<?php

$container->set('settings',function(){
    return (object)[
        'db' => [
            "DB_HOST" => 'localhost',
            "DB_NAME" => 'dbname',
            "DB_USER" => 'root',
            "DB_PASS" => '',
            "DB_CHAR" => 'utf8'
        ]
    ];
});