# PHP watch

Are you tired of executing your PHP script in the command line ? PhpWatch can help you with that, just change your PHP script and see the output in the command line.

## Normal flow

1\. You write a PHP script
``` php
<?php
print 'my PHP script';
```

2\. Go to terminal and execute the script
```
matheus@marabesi /github/php-watch $ php my_script.php
my PHP script
```

3\. Change it and then run again, and then repeat the steps

## PHP watch flow

1\. You write a PHP script
``` php
<?php
print 'my PHP script';
```

2\. Go to terminal and execute the script
```
matheus@marabesi /github/php-watch $ php bin/watch.php watch my_script.php
Start watching : /github/php-watch/my_script.php
```
3\. Just change it and see your changes automatically inthe terminal
```
Modified September 20, 2015, 6:15 pm
my PHP script

Modified September 20, 2015, 6:16 pm
my PHP script 2
```
