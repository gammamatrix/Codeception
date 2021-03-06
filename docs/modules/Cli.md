# Cli Module

**For additional reference, please review the [source](https://github.com/Codeception/Codeception/tree/2.1/src/Codeception/Module/Cli.php)**


Wrapper for basic shell commands and shell output

## Responsibility
* Maintainer: **davert**
* Status: **stable**
* Contact: codecept@davert.mail.ua

*Please review the code of non-stable modules and provide patches if you have issues.*


### dontSeeInShellOutput
 
Checks that output from latest command doesn't contain text

 * `param` $text



### runShellCommand
 
Executes a shell command.
Fails If exit code is > 0. You can disable this by setting second parameter to false

```php
<?php
$I->runShellCommand('phpunit');

// do not fail test when command fails
$I->runShellCommand('phpunit', false);
```

 * `param` $command
 * `param bool` $failNonZero


### seeInShellOutput
 
Checks that output from last executed command contains text

 * `param` $text


### seeShellOutputMatches
__not documented__

<p>&nbsp;</p><div class="alert alert-warning">Module reference is taken from the source code. <a href="https://github.com/Codeception/Codeception/tree/2.1/src/Codeception/Module/Cli.php">Help us to improve documentation. Edit module reference</a></div>
