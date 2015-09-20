<?php

namespace PhpWatch;

class Invoker
{

    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}
