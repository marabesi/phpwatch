<?php

namespace PhpWatch\Watch;

use \Symfony\Component\Console\Output\OutputInterface;
use PhpWatch\Watch\ShellCommand;

trait Base
{
    public function dispatch(OutputInterface $output, ShellCommand $command)
    {
        $target = $this->getTarget();

        $output->writeln('Start watching : '.$target);

        $lastmodified = stat($target);

        while (true) {
            $current = stat($target);

            if ($current['mtime'] > $lastmodified['mtime']) {
                $output->writeln(
                    'Modified '.date('F j, Y, g:i a', $current['mtime']
                    )
                );

                $output->writeln(shell_exec($command->getCommand() .
                    ' ' .
                    escapeshellarg($target)));

                $lastmodified = $current;
            }

            clearstatcache();
        }
    }
}