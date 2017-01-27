<?php

/*
 * phptest1 (https://github.com/hansmehlin/phptest1).

 * Just a test.
 *
 * @link https://github.com/hansmehlin/phptest1
 * @author hans <hans.mehlin@nobelmedia.se>
 */

namespace Phptest1\Tests;

use Phptest1\Person;

/**
 * Person tests example.
 */
class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testGreetDefaults()
    {
        $person = new Person();

        self::assertEquals('No one', $person->getName());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage " " is not a valid name
     */
    public function testInvalidName()
    {
        new Person(' ');
    }

    /**
     * @dataProvider namesProvider
     *
     * @param string $name
     */
    public function testName($name)
    {
        $person = new Person($name);

        self::assertEquals($name, $person->getName());
    }

    /**
     * Names provider.
     *
     * @return array
     */
    public function namesProvider()
    {
        return [
            ['John Doe'],
            ['Jane Doe'],
        ];
    }
}
