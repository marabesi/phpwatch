<?php

namespace PhpWatch\Watch;

class FileHandler
{

    public function isFile($filename)
    {
        return is_file($filename);
    }
}