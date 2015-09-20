<?php

namespace PhpWatch;

trait Output
{

    public function println($str)
    {
        print $str . PHP_EOL;
    }
}
