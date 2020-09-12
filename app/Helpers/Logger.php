<?php

namespace App\Helpers;

class Logger
{
    public function send($log)
    {
        // send the log to an external service
        return 'Sent! - ' . $log;
    }

    public static function log($log)
    {
        return app(Logger::class)->send($log);
    }
}