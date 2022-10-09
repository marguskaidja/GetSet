<?php

/**
 * This file is part of the GetSet package.
 *
 * @author  Margus Kaidja <margusk@gmail.com>
 * @link    https://github.com/marguskaidja/php-getset
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

declare(strict_types=1);

namespace margusk\GetSet\Tests;

use PHPUnit\Framework\Constraint\LogicalNot;
use PHPUnit\Framework\TestCase as TestCaseBase;

class TestCase extends TestCaseBase
{
    public static function assertNotObjectEquals(object $expected, object $actual, string $method = 'equals', string $message = ''): void
    {
        static::assertThat(
            $actual,
            new LogicalNot(static::objectEquals($expected, $method)),
            $message
        );
    }
}