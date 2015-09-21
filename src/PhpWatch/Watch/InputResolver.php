<?php

namespace PhpWatch\Watch;

use PhpWatch\Watch\FileHandler;

class InputResolver
{
    /**
     * @var string
     */
    private $target;

    /**
     * @return PhpWatch\Watch\FileHandler
     */
    private $fileHandler;

    function getTarget()
    {
        return $this->target;
    }

    function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return PhpWatch\Watch\FileHandler
     */
    function getFileHandler()
    {
        if (null === $this->fileHandler) {
            $this->fileHandler = new FileHandler();
        }

        return $this->fileHandler;
    }

    function setFileHandler(FileHandler $fileHandler)
    {
        $this->fileHandler = $fileHandler;
    }

    public function getResolvedTarget()
    {
        $path        = $this->getTarget();
        $dirIterator = new \RecursiveDirectoryIterator($path);
        $iterator    = new \RecursiveIteratorIterator($dirIterator);
        $files       = [];

        $regexFiles = new \RegexIterator($iterator, '/^.+\.php$/i',
            \RecursiveRegexIterator::GET_MATCH);

        foreach ($regexFiles as $fileRegex) {
            $files[] = $fileRegex;
        }

        return $files;
    }
}