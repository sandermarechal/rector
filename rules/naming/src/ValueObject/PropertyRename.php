<?php

declare(strict_types=1);

namespace Rector\Naming\ValueObject;

use PhpParser\Node\Stmt\ClassLike;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\PropertyProperty;

final class PropertyRename
{
    /**
     * @var string
     */
    private $expectedName;

    /**
     * @var string
     */
    private $currentName;

    /**
     * @var Property
     */
    private $property;

    /**
     * @var ClassLike
     */
    private $classLike;

    /**
     * @var PropertyProperty
     */
    private $propertyProperty;

    public function __construct(
        Property $property,
        string $expectedName,
        string $currentName,
        ClassLike $classLike,
        PropertyProperty $propertyProperty
    ) {
        $this->property = $property;
        $this->expectedName = $expectedName;
        $this->currentName = $currentName;
        $this->classLike = $classLike;
        $this->propertyProperty = $propertyProperty;
    }

    public function getProperty(): Property
    {
        return $this->property;
    }

    public function getExpectedName(): string
    {
        return $this->expectedName;
    }

    public function getCurrentName(): string
    {
        return $this->currentName;
    }

    public function getClassLike(): ClassLike
    {
        return $this->classLike;
    }

    public function getPropertyProperty(): PropertyProperty
    {
        return $this->propertyProperty;
    }
}
