<?php

namespace PhpWatch;

class Watch implements Command
{
    
    private $phpFile;
    
    public function __construct(PhpFile $phpFile)
    {
        $this->phpFile = $phpFile;
    }
    
    public function execute()
    {
        $this->phpFile->turnOnWatch();
    }
}
