<?php

namespace App\Logger;

class Logger
{
    private $logFilePath;

    public function __construct($logFilePath)
    {
        $this->logFilePath = $logFilePath;
        $this->ensureLogDirectoryExists();
    }

    private function ensureLogDirectoryExists()
    {
        $logDirectory = dirname($this->logFilePath);
        if (!file_exists($logDirectory)) {
            mkdir($logDirectory, 0777, true);
        }
    }

    public function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message" . PHP_EOL;
        error_log($logMessage, 3, $this->logFilePath);
    }
}
