<?php

namespace PhpWatch;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use PhpWatch\Watch\InputResolver;

class Phpunit extends Command
{

    use Watch\Target;

    protected function configure()
    {
        $this
            ->setName('phpunit')
            ->addArgument(
                'directory', InputArgument::REQUIRED
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $inputResolver = new InputResolver();
        $inputResolver->setTarget($input->getArgument('directory'));
        $inputResolver->getResolvedTarget();
        
        $output->writeln('running phpunit');
    }

    public function getCommand()
    {
        return 'phpunit';
    }
}