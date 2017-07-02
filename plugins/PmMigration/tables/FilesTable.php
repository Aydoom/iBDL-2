<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PmMigration\Tables;
use PmMigration\Core\DefTable;
/**
 * Description of FilesTable
 *
 * @author Aydoom
 */
class FilesTable extends DefTable {
	
    public $name = 'files';
    public $fields = [];

    /**
     * 
     * @param type $name
     */
    public function __construct($name = false)
    {
        if ($name) {
            $this->name = $name;
        }
        
        $this->defId("id");
        $this->defId("id_user_group", false);
        $this->defVarchars(["name", "username", "email", "password"]);
        $this->addField("block", "tinyint")->def("NULL");
        $this->addField("sendEmail", "tinyint")->def("NULL");
        $this->defDates(["registerDate", "lastvisitDate"]);
    }
}
