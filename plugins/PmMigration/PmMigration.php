<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PMMigration
 *
 * @author Aydoom
 */
namespace PmMigration;
use PmMigration\Core\DB;

class PmMigration {

    public $DB;
    public $table;
    
    public function __construct() 
    {
        $configAll = require CONFIG . 'app.php';
        $config = $configAll['Datasources']['default'];
        $this->DB = new DB($config);
    }
    
    public function table($name) 
    {
        $tableName = 'PmMigration\\Tables\\' . ucfirst(strtolower($name)) . 'Table';
        $this->table = new $tableName();
        
        return $this;
    }
    
    public function create()
    {
        $this->DB->add($this->table);
    }
}
