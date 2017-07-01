<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>iBDL-2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->css(['bootstrap.min', 'bootstrap-theme.min', 'main.css']) ?>
    </head>
    <body>
        <?= $this->fetch('content') ?>
        
        <?= $this->Html->script(['jquery-3.2.1.min.js', 'angular.min.js', 'app.js']) ?>
    </body>
</html>
