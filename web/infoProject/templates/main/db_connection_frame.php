<?php 

$this->render('components/card', ['title' => 'Check MYSQL connection', 'body' => testingDBConnection($this->getApp())]);