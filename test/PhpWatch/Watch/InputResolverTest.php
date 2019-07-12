<?php

namespace Test\PhpWatch\Watch;

use PHPUnit\Framework\TestCase;
use PhpWatch\Watch\InputResolver;

class InputResolverTest extends TestCase
{

    public function testShouldResolveAnDirectory()
    {
        $resolver = new InputResolver();
        $resolver->setTarget('file.php');
    }
}