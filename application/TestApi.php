<?php
/**
 * Created by PhpStorm.
 * User: songping
 * Date: 2016/12/23
 * Time: 下午9:54
 */

require 'vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');