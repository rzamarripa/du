<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlsrv:server=.;database=DU;',
    'username' => 'sa',
    'password' => '123',
    'charset' => 'utf8',
    'attributes' => [
        // utilizar un tiempo de espera de conexión más pequeña
        PDO::ATTR_TIMEOUT => 10,
    ],
];
