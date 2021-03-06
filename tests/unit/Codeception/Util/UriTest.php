<?php
namespace Codeception\Util;


class UriTest extends \Codeception\TestCase\Test
{
    // tests
    public function testUrlMerge()
    {
        $this->assertEquals(
            'http://codeception.com/quickstart',
            Uri::mergeUrls('http://codeception.com/hello', '/quickstart'),
            'merge paths'
        );

        $this->assertEquals(
            'http://codeception.com/hello/davert',
            Uri::mergeUrls('http://codeception.com/hello/world', 'davert'),
            'merge relative urls'
        );

        $this->assertEquals(
            'https://github.com/codeception/codeception',
            Uri::mergeUrls('http://codeception.com/hello/world', 'https://github.com/codeception/codeception'),
            'merge absolute urls'
        );

    }


}