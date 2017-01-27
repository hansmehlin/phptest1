<?php

/*
 * phptest1 (https://github.com/hansmehlin/phptest1).

 * Just a test.
 *
 * @link https://github.com/hansmehlin/phptest1
 * @author hans <hans.mehlin@nobelmedia.se>
 */

namespace Phptest1\Tests;

use Phptest1\Greeter;
use Phptest1\Person;

/**
 * Greeter tests example.
 */
class GreeterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Greeter
     */
    protected $greeter;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->greeter = new Greeter;
    }

    public function testGreet()
    {
        $person = self::getMockBuilder(Person::class)->disableOriginalConstructor()->getMock();
        $person->expects(self::once())->method('getName')->will(self::returnValue('John Doe'));

        self::assertEquals('Hello John Doe', $this->greeter->greet($person));
    }
}
