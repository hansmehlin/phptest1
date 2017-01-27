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
 * Example Person class.
 */
class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * Person constructor.
     *
     * @param string $name
     */
    public function __construct($name = 'No one')
    {
        $this->setName($name);
    }

    /**
     * Return person name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set person name.
     *
     * @param string $name
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function setName($name)
    {
        if (trim($name) === '') {
            throw new \InvalidArgumentException(sprintf('"%s" is not a valid name', $name));
        }

        $this->name = trim($name);

        return $this;
    }
}
