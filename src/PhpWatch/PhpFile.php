<?php

namespace PhpWatch;

class PhpFile extends \SplFileObject implements File
{

    use Output;

    public function turnOnWatch()
    {
        $realpath = parent::getRealPath();

        $this->println('Start watching : ' . $realpath);

        $lastmodified = stat($realpath);

        while (true) {
            $current = stat($realpath);

            if ($current['mtime'] > $lastmodified['mtime']) {
                $this->println('Modified ' . date('F j, Y, g:i a', $current['mtime']));

                $this->println(shell_exec('php ' . escapeshellarg($realpath)));

                $lastmodified = $current;
            }

            clearstatcache();
        }
    }
}