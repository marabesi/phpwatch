<?php

namespace PhpWatch;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Watch extends Command
{
    
    protected function configure()
    {
        $this->setName('watch')
            ->setDescription('Executes watch command')
            ->addArgument(
                'file',
                InputArgument::REQUIRED
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $realpath = $input->getArgument('file');

        $output->writeln('Start watching : ' . $realpath);

        $lastmodified = stat($realpath);

        while (true) {
            $current = stat($realpath);

            if ($current['mtime'] > $lastmodified['mtime']) {
                $output->writeln(
                    'Modified ' . date('F j, Y, g:i a',
                        $current['mtime']
                    )
                );

                $output->writeln(shell_exec('php ' . escapeshellarg($realpath)));

                $lastmodified = $current;
            }

            clearstatcache();
        }
    }
}
