<?php

namespace PhpWatch\Watch;

trait Target
{
    private $target;

    public function setTarget($target)
    {
        $this->target = $target;
    }

    public function getTarget()
    {
        return $this->target;
    }
}