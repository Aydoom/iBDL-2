<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Description of HomeController
 *
 * @author Aydoom
 */
class IbdlController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('home');
    }
}
