<?php
/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}


define('HOME', dirname(__DIR__));
define('UPDIR', DS . '..');

define('BACKEND', HOME . DS . 'backend');
define('FRONTEND', HOME . DS . 'frontend');
define('CAKEPHP', HOME . UPDIR . DS . 'cakephp' . DS . 'app');
