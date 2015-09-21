<?php

namespace Test\PhpWatch\Watch;

use PhpWatch\Watch\InputResolver;

class InputResolverTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldResolveAnDirectory()
    {
        $resolver = new InputResolver();
        $resolver->setTarget('file.php');
    }
}