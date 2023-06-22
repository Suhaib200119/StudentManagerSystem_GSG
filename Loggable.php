<?php
namespace loggable;
trait Loggable{
    static function log($message)
    {
        $logFile = 'log.txt';
        file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
    }
}