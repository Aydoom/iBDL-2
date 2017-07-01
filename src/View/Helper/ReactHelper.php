<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReactHelper
 *
 * @author Aydoom
 */
namespace App\View\Helper;
use Cake\View\Helper;

class ReactHelper extends Helper
{
    public $helpers = ['Html'];
    
    public function import($app, $components = [], $debug = false) 
    {
        $baseDir = WWW_ROOT . 'js' . DS ;
        $reactDir = $baseDir . 'react' . DS;
        $loadDir = $reactDir . DS . 'components' . DS;
        
        foreach ($components as $component) {
            $file = $loadDir . $component . '.jsx';
            if (file_exists($file)) {
                //$jsCode.= '/* BEGIN COMPONENT "' . $component . '"*/' . "\n";
                $jsCode.= file_get_contents($file);
                //$jsCode.= '/* END COMPONENT "' . $component . '"*/' . "\n\n";
            }
        }
        
        $jsCode.= (file_exists($baseDir . $app . '.js')) ? 
                file_get_contents($baseDir . $app . '.js') . "\n" : '';
        
        
        file_put_contents($reactDir . 'app.js', $jsCode);
        
        $scriptName = ($debug)  ? 'app.js?v=' . rand(10000, 99999) : 'app';
        
        return $this->Html->script("react/$scriptName", ['type' => 'text/babel']) . "\n";
    }
}
