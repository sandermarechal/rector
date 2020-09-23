<?php

declare(strict_types=1);

namespace Rector\Naming\ExpectedNameResolver;

use PhpParser\Node\Stmt\Property;

interface ExpectedNameResolverInterface
{
    public function resolveIfNotYet(Property $property);

    public function resolve(Property $property);
}
