<?php

namespace Droid\Plugin\Bower;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $commands[] = new \Droid\Plugin\Bower\Command\BowerInstallCommand();
        return $commands;
    }
}
