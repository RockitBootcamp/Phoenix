#Standards and Style
It is important that code adhere to a common code style. This make it easy for developers quickly understand the problem the code is solving instead of taking time to learn the style of the code. Ideally you should write code that adheres to a known standard.

This will capture Standards and Style for 

* JavaScript
* PHP
* CSS
* HTML
* MySQL

## PHP
PHP has a large community of developers and many different styles. The [Framework Interop Group](http://www.php-fig.org/) has proposed and approved a series of style recommendations.

**Standards**

* [PSR-0: Autoloading Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md)
* [PSR-1: Basic Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
* [PSR-2: Meta Document](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide-meta.md)
* [PSR-4: Autoloader](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) (Use this over PS2-0 for newer projects)
* [Pear Coding Standards](http://pear.php.net/manual/en/standards.php)
* [Zend Coding Standards](http://framework.zend.com/wiki/display/ZFDEV2/Coding+Standards)
* [Symfony Coding Standards](http://symfony.com/doc/current/contributing/code/standards.html)

**Tools**

* [PHP Code Sniffer](http://pear.php.net/package/PHP_CodeSniffer/)
* [Sublime Plugin](https://github.com/benmatselby/sublime-phpcs) for Code analysis

**Example Code**

```

<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme;

/**
 * Coding standards demonstration.
 */
class FooBar
{
    const SOME_CONST = 42;

    private $fooBar;

    /**
     * @param string $dummy Some argument description
     */
    public function __construct($dummy)
    {
        $this->fooBar = $this->transformText($dummy);
    }

    /**
     * @param string $dummy Some argument description
     * @param array  $options
     *
     * @return string|null Transformed input
     *
     * @throws \RuntimeException
     */
    private function transformText($dummy, array $options = array())
    {
        $mergedOptions = array_merge(
            array(
                'some_default' => 'values',
                'another_default' => 'more values',
            ),
            $options
        );

        if (true === $dummy) {
            return;
        }

        if ('string' === $dummy) {
            if ('values' === $mergedOptions['some_default']) {
                return substr($dummy, 0, 5);
            }

            return ucwords($dummy);
        }

        throw new \RuntimeException(sprintf('Unrecognized dummy option "%s"', $dummy));
    }
}
```

## MySQL

* Default encoding: utf8
* Default collation: utf8_unicode_ci


*References*
* [Best Encoding for PHP](http://stackoverflow.com/questions/367711/what-is-the-best-collation-to-use-for-mysql-with-php)
* [Example of setting encoding](http://kb.mediatemple.net/questions/138/Default+MySQL+character+set+and+collation#gs)
* 


