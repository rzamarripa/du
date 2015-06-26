<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlsrv:server=.;database=EMPRESAS;',
    'username' => 'abacoApp',
    'password' => 'S1stem@Pas5@',
    'charset' => 'utf8',
    'attributes' => [
        // utilizar un tiempo de espera de conexión más pequeña
        PDO::ATTR_TIMEOUT => 10,
    ],
];
