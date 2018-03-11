<?php

class DATABASE_CONFIG {

    public $default = [
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'migration_user',
        'password' => '123',
        'database' => 'migration_parent_db',
        'prefix' => '',
    ];

    public $test = [
        'datasource' => 'DummySource',
    ];

}
