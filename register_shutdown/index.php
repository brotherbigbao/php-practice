<?php
class Log{
    private static $logs = [];

    public static function info(string $message): void
    {
        self::$logs[] = $message;
    }

    public static function save(): void
    {
        foreach (self::$logs as $log) {
            echo $log, "\n";
        }
    }
}

register_shutdown_function(function (){
    Log::save();
});

Log::info('this is log.');
Log::info('this is a log.');

exit(1);

Log::info('this is b log.');
Log::info('this is c log.');