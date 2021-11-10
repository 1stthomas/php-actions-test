<?php

namespace Ht7\PhpActionsTest\Examples;

class Test01
{

    /**
     * A property.
     *
     * @var string
     */
    protected $property;

    public function __construct(string $property)
    {
        $this->setProperty($property);
    }

    /**
     * Get the property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set the property.
     *
     * @param   string $property
     * @return  $this
     */
    public function setProperty(string $property)
    {
        $this->property = $property;

        return $this;
    }

}
