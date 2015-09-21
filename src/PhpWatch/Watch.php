<?php

namespace PhpWatch;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use PhpWatch\Watch\ShellCommand;

class Watch extends Command implements ShellCommand
{

    use Watch\Base;
    use Watch\Target;

    protected function configure()
    {
        $this->setName('watch')
            ->setDescription('Executes watch command')
            ->addArgument(
                'file', InputArgument::REQUIRED
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setTarget(
            $input->getArgument('file')
        );

        $this->dispatch($output, $this);
    }

    public function getCommand()
    {
        return 'php';
    }
}