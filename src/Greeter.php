<?php

/*
 * phptest1 (https://github.com/hansmehlin/phptest1).

 * Just a test.
 *
 * @link https://github.com/hansmehlin/phptest1
 * @author hans <hans.mehlin@nobelmedia.se>
 */

namespace Phptest1;

/**
 * Example class.
 */
class Greeter
{
    /**
     * Greet a person.
     *
     * @param Person $person
     *
     * @return string
     */
    public function greet(Person $person)
    {
        return 'Hello ' . $person->getName();
    }
}
