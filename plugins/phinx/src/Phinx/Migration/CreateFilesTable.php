<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Phinx\Migration;
use Phinx\Migration\AbstractMigration;

/**
 * Description of CreateFilesTable
 *
 * @author aydoom
 */
class CreateFilesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $files = $this->table('files');
        $files->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('files');
    }
}
