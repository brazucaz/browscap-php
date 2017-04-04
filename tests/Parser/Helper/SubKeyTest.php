<?php

namespace BrowscapPHPTest\Parser\Helper;

use BrowscapPHP\Parser\Helper\SubKey;

/**
 * @covers \BrowscapPHP\Parser\Helper\SubKey
 */
final class SubKeyTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPatternCacheSubkey() : void
    {
        self::assertSame('ab', SubKey::getPatternCacheSubkey('abcd'));
    }

    public function testGetAllPatternCacheSubkeys() : void
    {
        $result = SubKey::getAllPatternCacheSubkeys();
        self::assertInternalType('array', $result);
        self::assertCount(256, $result);
    }
}
