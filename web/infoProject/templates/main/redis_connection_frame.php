<?php 

$this->render('components/card', ['title' => 'Check Redis connection', 'body' => testRedisConnection($this->getApp())]);