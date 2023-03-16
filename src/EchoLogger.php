<?php
namespace Kilian2402\Logger;

class EchoLogger implements ILogger
{

    public function logEntry(string $line): void
    {
        echo '[LOG]: ' . $line . "\n";
    }
}
