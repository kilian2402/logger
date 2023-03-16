<?php
namespace Kilian2402\Logger;

interface ILogger
{
    public function logEntry(string $line): void;
}
