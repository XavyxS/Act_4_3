<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
  /**
   * The directory that holds the Migrations and Seeds directories.
   */
  public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

  /**
   * Lets you choose which connection group to use if no other is specified.
   */
  public string $defaultGroup = 'default';

  public array $default = [
    'DSN'        => '',
    'hostname'   => 'dpg-cshhq72j1k6c73981kb0-a.oregon-postgres.render.com',  
    'username'   => 'sa',
    'password'   => 'AtTMisesXcfjOFOCOgoPLpSWcPbp85xW',
    'database'   => 'db_test_whk5',
    'schema'     => 'public',
    'DBDriver'   => 'Postgre',
    'DBPrefix'   => '',
    'pConnect'   => false,
    'DBDebug'    => (ENVIRONMENT !== 'production'),  
    'charset'    => 'utf8',
    'DBCollat'   => 'utf8_general_ci',
    'swapPre'    => '',
    'failover'   => [],
    'port'       => 5432,
];

  public array $tests = [
    'DSN'         => '',
    'hostname'    => '127.0.0.1',
    'username'    => '',
    'password'    => '',
    'database'    => ':memory:',
    'DBDriver'    => 'SQLite3',
    'DBPrefix'    => 'db_',  // Needed to ensure we're working correctly with prefixes live. DO NOT REMOVE FOR CI DEVS
    'pConnect'    => false,
    'DBDebug'     => true,
    'charset'     => 'utf8',
    'DBCollat'    => '',
    'swapPre'     => '',
    'encrypt'     => false,
    'compress'    => false,
    'strictOn'    => false,
    'failover'    => [],
    'port'        => 3306,
    'foreignKeys' => true,
    'busyTimeout' => 1000,
    'dateFormat'  => [
      'date'     => 'Y-m-d',
      'datetime' => 'Y-m-d H:i:s',
      'time'     => 'H:i:s',
    ],
  ];

  public function __construct()
  {
    parent::__construct();

    // Ensure that we always set the database group to 'tests' if
    // we are currently running an automated test suite, so that
    // we don't overwrite live data on accident.
    if (ENVIRONMENT === 'testing') {
      $this->defaultGroup = 'tests';
    }
  }
}
