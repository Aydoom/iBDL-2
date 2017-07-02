<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace PmMigration\Core\Fields;

/**
 * Description of DateTimeField
 *
 * @author Aydoom
 */
class DateTimeField extends \PmMigration\Core\Field {

    public $type = "DATETIME";
    
    /**
     * 
     */
    public function getString()
    {
        return "{$this->name} " . strtoupper($this->type);
    }

}
