# Node Overview


## `PhpParser\Node\Arg`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Arg($variable);
```

↓

```php
$variableName
```

<br>


### Public Properties

 * `$name` - `/** @var Identifier|null Parameter name (for named parameters) */`
 * `$value` - `/** @var Expr Value to pass */`
 * `$byRef` - `/** @var bool Whether to pass by ref */`
 * `$unpack` - `/** @var bool Whether to unpack the argument */`

<br>

## `PhpParser\Node\Const_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Const_;
use PhpParser\Node\Scalar\String_;

return new Const_('CONSTANT_NAME', new String_('default'));
```

↓

```php
CONSTANT_NAME = 'default'
```

<br>


### Public Properties

 * `$name` - `/** @var Identifier Name */`
 * `$value` - `/** @var Expr Value */`

<br>

## `PhpParser\Node\Expr\ArrayDimFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ArrayDimFetch;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\LNumber;

$variable = new Variable('variableName');
$dimension = new LNumber(0);

return new ArrayDimFetch($variable, $dimension);
```

↓

```php
$variableName[0]
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$dim` - `/** @var null|Expr Array index / dim */`

<br>

## `PhpParser\Node\Expr\ArrayItem`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;

$value = new Variable('Tom');
$key = new String_('name');

return new ArrayItem($value, $key);
```

↓

```php
'name' => $Tom
```

<br>


### Public Properties

 * `$key` - `/** @var null|Expr Key */`
 * `$value` - `/** @var Expr Value */`
 * `$byRef` - `/** @var bool Whether to assign by reference */`
 * `$unpack` - `/** @var bool Whether to unpack the argument */`

<br>

## `PhpParser\Node\Expr\Array_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;

$value = new Variable('Tom');
$key = new String_('name');

$arrayItem = new ArrayItem($value, $key);

return new Array_([$arrayItem]);
```

↓

```php
['name' => $Tom]
```

<br>


### Public Properties

 * `$items` - `/** @var (ArrayItem|null)[] Items */`

<br>

## `PhpParser\Node\Expr\ArrowFunction`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ArrowFunction;
use PhpParser\Node\Scalar\LNumber;

$subNodes['expr'] = new LNumber(1);

return new ArrowFunction($subNodes);
```

↓

```php
fn() => 1
```

<br>


### Public Properties

 * `$static` - `/** @var bool */`
 * `$byRef` - `/** @var bool */`
 * `$params` - `/** @var Node\Param[] */`
 * `$returnType` - `/** @var null|Node\Identifier|Node\Name|Node\NullableType|Node\UnionType */`
 * `$expr` - `/** @var Expr */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] */`

<br>

## `PhpParser\Node\Expr\Assign`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;

$variable = new Variable('variableName');
$value = new String_('some value');

return new Assign($variable, $value);
```

↓

```php
$variableName = 'some value'
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\BitwiseAnd`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\BitwiseAnd;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseAnd($left, $right);
```

↓

```php
5 &= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\BitwiseOr`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\BitwiseOr;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseOr($left, $right);
```

↓

```php
5 |= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\BitwiseXor`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\BitwiseXor;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseXor($left, $right);
```

↓

```php
5 ^= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Coalesce`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Coalesce;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Coalesce($left, $right);
```

↓

```php
5 ??= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Concat`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Concat;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Concat($left, $right);
```

↓

```php
5 .= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Div`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Div;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Div($left, $right);
```

↓

```php
5 /= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Minus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Minus;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Minus($left, $right);
```

↓

```php
5 -= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Mod`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Mod;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Mod($left, $right);
```

↓

```php
5 %= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Mul`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Mul;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Mul($left, $right);
```

↓

```php
5 *= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Plus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Plus;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Plus($left, $right);
```

↓

```php
5 += 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\Pow`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\Pow;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Pow($left, $right);
```

↓

```php
5 **= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\ShiftLeft`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\ShiftLeft;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new ShiftLeft($left, $right);
```

↓

```php
5 <<= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignOp\ShiftRight`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignOp\ShiftRight;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new ShiftRight($left, $right);
```

↓

```php
5 >>= 10
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`
 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\AssignRef`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\AssignRef;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');
$variableRef = new Variable('someOtherVariable');

return new AssignRef($variable, $variableRef);
```

↓

```php
$variableName =& $someOtherVariable
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable reference is assigned to */`
 * `$expr` - `/** @var Expr Variable which is referenced */`

<br>

## `PhpParser\Node\Expr\BinaryOp\BitwiseAnd`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\BitwiseAnd;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseAnd($left, $right);
```

↓

```php
5 & 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\BitwiseOr`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\BitwiseOr;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseOr($left, $right);
```

↓

```php
5 | 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\BitwiseXor`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\BitwiseXor;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BitwiseXor($left, $right);
```

↓

```php
5 ^ 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\BooleanAnd`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\BooleanAnd;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new BooleanAnd($left, $right);
```

↓

```php
5 && 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Coalesce`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Coalesce;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Coalesce($left, $right);
```

↓

```php
5 ?? 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Concat`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Concat;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Concat($left, $right);
```

↓

```php
5 . 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Div`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Div;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Div($left, $right);
```

↓

```php
5 / 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Equal`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Equal;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Equal($left, $right);
```

↓

```php
5 == 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Greater`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Greater;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Greater($left, $right);
```

↓

```php
5 > 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\GreaterOrEqual`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\GreaterOrEqual;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new GreaterOrEqual($left, $right);
```

↓

```php
5 >= 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Identical`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Identical;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Identical($left, $right);
```

↓

```php
5 === 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\LogicalAnd`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\LogicalAnd;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new LogicalAnd($left, $right);
```

↓

```php
5 and 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\LogicalOr`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\LogicalOr;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new LogicalOr($left, $right);
```

↓

```php
5 or 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\LogicalXor`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\LogicalXor;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new LogicalXor($left, $right);
```

↓

```php
5 xor 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Minus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Minus;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Minus($left, $right);
```

↓

```php
5 - 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Mod`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Mod;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Mod($left, $right);
```

↓

```php
5 % 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Mul`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Mul;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Mul($left, $right);
```

↓

```php
5 * 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\NotEqual`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\NotEqual;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new NotEqual($left, $right);
```

↓

```php
5 != 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\NotIdentical`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\NotIdentical;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new NotIdentical($left, $right);
```

↓

```php
5 !== 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Plus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Plus;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Plus($left, $right);
```

↓

```php
5 + 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Pow`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Pow;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Pow($left, $right);
```

↓

```php
5 ** 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\ShiftLeft`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\ShiftLeft;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new ShiftLeft($left, $right);
```

↓

```php
5 << 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\ShiftRight`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\ShiftRight;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new ShiftRight($left, $right);
```

↓

```php
5 >> 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Smaller`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Smaller;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Smaller($left, $right);
```

↓

```php
5 < 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\SmallerOrEqual`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\SmallerOrEqual;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new SmallerOrEqual($left, $right);
```

↓

```php
5 <= 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BinaryOp\Spaceship`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BinaryOp\Spaceship;
use PhpParser\Node\Scalar\LNumber;

$left = new LNumber(5);
$right = new LNumber(10);

return new Spaceship($left, $right);
```

↓

```php
5 <=> 10
```

<br>


### Public Properties

 * `$left` - `/** @var Expr The left hand side expression */`
 * `$right` - `/** @var Expr The right hand side expression */`

<br>

## `PhpParser\Node\Expr\BitwiseNot`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BitwiseNot;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new BitwiseNot($variable);
```

↓

```php
~$variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\BooleanNot`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\BooleanNot;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('isEligible');

return new BooleanNot($variable);
```

↓

```php
!$isEligible
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\Array_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new Array_($expr);
```

↓

```php
(array) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\Bool_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\Bool_;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new Bool_($expr);
```

↓

```php
(bool) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\Double`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\Double;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new Double($expr);
```

↓

```php
(double) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\Int_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\Int_;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new Int_($expr);
```

↓

```php
(int) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\String_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\String_;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new String_($expr);
```

↓

```php
(string) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Cast\Unset_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Cast\Unset_;
use PhpParser\Node\Expr\Variable;

$expr = new Variable('variableName');

return new Unset_($expr);
```

↓

```php
(unset) $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\ClassConstFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Name\FullyQualified;

$class = new FullyQualified('SomeClassName');

return new ClassConstFetch($class, 'SOME_CONSTANT');
```

↓

```php
\SomeClassName::SOME_CONSTANT
```

<br>


### Public Properties

 * `$class` - `/** @var Name|Expr Class name */`
 * `$name` - `/** @var Identifier|Error Constant name */`

<br>

## `PhpParser\Node\Expr\Clone_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Clone_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Clone_($variable);
```

↓

```php
clone $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\ClosureUse`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ClosureUse;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new ClosureUse($variable);
```

↓

```php
$variableName
```

<br>


### Public Properties

 * `$var` - `/** @var Expr\Variable Variable to use */`
 * `$byRef` - `/** @var bool Whether to use by reference */`

<br>

## `PhpParser\Node\Expr\ConstFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;

$name = new Name('true');

return new ConstFetch($name);
```

↓

```php
true
```

<br>


### Public Properties

 * `$name` - `/** @var Name Constant name */`

<br>

## `PhpParser\Node\Expr\Empty_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Empty_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Empty_($variable);
```

↓

```php
empty($variableName)
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\ErrorSuppress`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ErrorSuppress;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new ErrorSuppress($variable);
```

↓

```php
@$variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Eval_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Eval_;
use PhpParser\Node\Scalar\String_;

$string = new String_('Some php code');

return new Eval_(new String_('Some php code'));
```

↓

```php
eval('Some php code')
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Eval_;
use PhpParser\Node\Scalar\String_;

$phpCode = new String_('Some php code');

return new Eval_($phpCode);
```

↓

```php
eval('Some php code')
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\FuncCall`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Name;

return new FuncCall(new Name('func_call'));
```

↓

```php
func_call()
```

<br>


### Public Properties

 * `$name` - `/** @var Node\Name|Expr Function name */`
 * `$args` - `/** @var Node\Arg[] Arguments */`

<br>

## `PhpParser\Node\Expr\Include_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Include_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Include_($variable, Include_::TYPE_INCLUDE);
```

↓

```php
include $variableName
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Include_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Include_($variable, Include_::TYPE_REQUIRE_ONCE);
```

↓

```php
require_once $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`
 * `$type` - `/** @var int Type of include */`

<br>

## `PhpParser\Node\Expr\Instanceof_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Instanceof_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name\FullyQualified;

$variable = new Variable('variableName');
$class = new FullyQualified('SomeClassName');

return new Instanceof_($variable, $class);
```

↓

```php
$variableName instanceof \SomeClassName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`
 * `$class` - `/** @var Name|Expr Class name */`

<br>

## `PhpParser\Node\Expr\Isset_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Isset_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new Isset_([$variable]);
```

↓

```php
isset($variableName)
```

<br>


### Public Properties

 * `$vars` - `/** @var Expr[] Variables */`

<br>

## `PhpParser\Node\Expr\List_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\List_;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');
$anotherVariable = new Variable('anoterVariableName');

$arrayItems = [new ArrayItem($variable), new ArrayItem($anotherVariable)];

return new List_($arrayItems);
```

↓

```php
list($variableName, $anoterVariableName)
```

<br>


### Public Properties

 * `$items` - `/** @var (ArrayItem|null)[] List of items to assign to */`

<br>

## `PhpParser\Node\Expr\Match_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Match_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\MatchArm;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Scalar\String_;

$variable = new Variable('variableName');

$body = new String_('yes');
$cond = new LNumber(1);
$matchArm = new MatchArm([$cond], $body);

return new Match_($variable, [$matchArm]);
```

↓

```php
match ($variableName) {
    1 => 'yes',
}
```

<br>


### Public Properties

 * `$cond` - `/** @var Node\Expr */`
 * `$arms` - `/** @var MatchArm[] */`

<br>

## `PhpParser\Node\Expr\MethodCall`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('someObject');

return new MethodCall($variable, 'methodName');
```

↓

```php
$someObject->methodName()
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;

$variable = new Variable('someObject');

$args = [];
$args[] = new Arg(new String_('yes'));
$args[] = new Arg(new String_('maybe'));

return new MethodCall($variable, 'methodName', $args);
```

↓

```php
$someObject->methodName('yes', 'maybe')
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable holding object */`
 * `$name` - `/** @var Identifier|Expr Method name */`
 * `$args` - `/** @var Arg[] Arguments */`

<br>

## `PhpParser\Node\Expr\New_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

// anonymous class

use PhpParser\Node\Expr\New_;
use PhpParser\Node\Stmt\Class_;

$class = new Class_(null);

return new New_($class);
```

↓

```php
new class
{
}
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\New_;
use PhpParser\Node\Name;

$class = new Name('SomeClass');

return new New_($class);
```

↓

```php
new SomeClass()
```

<br>


### Public Properties

 * `$class` - `/** @var Node\Name|Expr|Node\Stmt\Class_ Class name */`
 * `$args` - `/** @var Node\Arg[] Arguments */`

<br>

## `PhpParser\Node\Expr\NullsafeMethodCall`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\NullsafeMethodCall;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new NullsafeMethodCall($variable, 'methodName');
```

↓

```php
$variableName?->methodName()
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable holding object */`
 * `$name` - `/** @var Identifier|Expr Method name */`
 * `$args` - `/** @var Arg[] Arguments */`

<br>

## `PhpParser\Node\Expr\NullsafePropertyFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\NullsafePropertyFetch;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new NullsafePropertyFetch($variable, 'someProperty');
```

↓

```php
$variableName?->someProperty
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable holding object */`
 * `$name` - `/** @var Identifier|Expr Property name */`

<br>

## `PhpParser\Node\Expr\PostDec`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\PostDec;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new PostDec($variable);
```

↓

```php
$variableName--
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`

<br>

## `PhpParser\Node\Expr\PostInc`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\PostInc;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new PostInc($variable);
```

↓

```php
$variableName++
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`

<br>

## `PhpParser\Node\Expr\PreDec`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\PreDec;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new PreDec($variable);
```

↓

```php
--$variableName
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`

<br>

## `PhpParser\Node\Expr\PreInc`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\PreInc;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new PreInc($variable);
```

↓

```php
++$variableName
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable */`

<br>

## `PhpParser\Node\Expr\Print_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Print_;
use PhpParser\Node\Scalar\String_;

$string = new String_('Some php code');

return new Print_($string);
```

↓

```php
print 'Some php code'
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\PropertyFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new PropertyFetch($variable, 'propertyName');
```

↓

```php
$variableName->propertyName
```

<br>


### Public Properties

 * `$var` - `/** @var Expr Variable holding object */`
 * `$name` - `/** @var Identifier|Expr Property name */`

<br>

## `PhpParser\Node\Expr\ShellExec`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ShellExec;
use PhpParser\Node\Scalar\EncapsedStringPart;

$parts = [new EncapsedStringPart('first part'), new EncapsedStringPart('second part')];

return new ShellExec($parts);
```

↓

```php
`first partsecond part`
```

<br>


### Public Properties

 * `$parts` - `/** @var array Encapsed string array */`

<br>

## `PhpParser\Node\Expr\StaticCall`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Name\FullyQualified;

$fullyQualified = new FullyQualified('ClassName');

return new StaticCall($fullyQualified, 'methodName');
```

↓

```php
\ClassName::methodName()
```

<br>


### Public Properties

 * `$class` - `/** @var Node\Name|Expr Class name */`
 * `$name` - `/** @var Identifier|Expr Method name */`
 * `$args` - `/** @var Node\Arg[] Arguments */`

<br>

## `PhpParser\Node\Expr\StaticPropertyFetch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\StaticPropertyFetch;
use PhpParser\Node\Name\FullyQualified;

$class = new FullyQualified('StaticClassName');

return new StaticPropertyFetch($class, 'someProperty');
```

↓

```php
\StaticClassName::$someProperty
```

<br>


### Public Properties

 * `$class` - `/** @var Name|Expr Class name */`
 * `$name` - `/** @var VarLikeIdentifier|Expr Property name */`

<br>

## `PhpParser\Node\Expr\Ternary`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Expr\Ternary;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;

$variable = new Variable('variableName');

$trueConstFetch = new ConstFetch(new Name('true'));
$falseConstFetch = new ConstFetch(new Name('false'));

return new Ternary($variable, $trueConstFetch, $falseConstFetch);
```

↓

```php
$variableName ? true : false
```

<br>


### Public Properties

 * `$cond` - `/** @var Expr Condition */`
 * `$if` - `/** @var null|Expr Expression for true */`
 * `$else` - `/** @var Expr Expression for false */`

<br>

## `PhpParser\Node\Expr\Throw_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Throw_;
use PhpParser\Node\Scalar\String_;

$string = new String_('some string');

return new Throw_($string);
```

↓

```php
throw 'some string'
```

<br>


### Public Properties

 * `$expr` - `/** @var Node\Expr Expression */`

<br>

## `PhpParser\Node\Expr\UnaryMinus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\UnaryMinus;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new UnaryMinus($variable);
```

↓

```php
-$variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\UnaryPlus`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\UnaryPlus;
use PhpParser\Node\Expr\Variable;

$variable = new Variable('variableName');

return new UnaryPlus($variable);
```

↓

```php
+$variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression */`

<br>

## `PhpParser\Node\Expr\Variable`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;

return new Variable('variableName');
```

↓

```php
$variableName
```

<br>


### Public Properties

 * `$name` - `/** @var string|Expr Name */`

<br>

## `PhpParser\Node\Expr\YieldFrom`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Expr\YieldFrom;

$variable = new Variable('variableName');

return new YieldFrom($variable);
```

↓

```php
yield from $variableName
```

<br>


### Public Properties

 * `$expr` - `/** @var Expr Expression to yield from */`

<br>

## `PhpParser\Node\Identifier`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Identifier;

return new Identifier('identifierName');
```

↓

```php
identifierName
```

<br>


### Public Properties

 * `$name` - `/** @var string Identifier as string */`
 * `$specialClassNames` - ``

<br>

## `PhpParser\Node\MatchArm`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\MatchArm;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Scalar\String_;

$conds = [new LNumber(1)];
$body = new String_('yes');

return new MatchArm($conds, $body);
```

↓

```php
1 => 'yes'
```

<br>


### Public Properties

 * `$conds` - `/** @var null|Node\Expr[] */`
 * `$body` - `/** @var Node\Expr */`

<br>

## `PhpParser\Node\Name`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name;

return new Name('shortName');
```

↓

```php
shortName
```

<br>


### Public Properties

 * `$parts` - `/** @var string[] Parts of the name */`
 * `$specialClassNames` - ``

<br>

## `PhpParser\Node\Name\FullyQualified`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name\FullyQualified;

return new FullyQualified('SomeNamespace\ShortName');
```

↓

```php
\SomeNamespace\ShortName
```

<br>


### Public Properties

 * `$parts` - `/** @var string[] Parts of the name */`

<br>

## `PhpParser\Node\Name\Relative`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name\Relative;

return new Relative('PartOf\SomeNamespace\ShortName');
```

↓

```php
namespace\PartOf\SomeNamespace\ShortName
```

<br>


### Public Properties

 * `$parts` - `/** @var string[] Parts of the name */`

<br>

## `PhpParser\Node\NullableType`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\NullableType;

return new NullableType('SomeType');
```

↓

```php
?SomeType
```

<br>


### Public Properties

 * `$type` - `/** @var Identifier|Name Type */`

<br>

## `PhpParser\Node\Param`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Param;

$variable = new Variable('variableName');

return new Param($variable);
```

↓

```php
$variableName
```

<br>


### Public Properties

 * `$type` - `/** @var null|Identifier|Name|NullableType|UnionType Type declaration */`
 * `$byRef` - `/** @var bool Whether parameter is passed by reference */`
 * `$variadic` - `/** @var bool Whether this is a variadic argument */`
 * `$var` - `/** @var Expr\Variable|Expr\Error Parameter variable */`
 * `$default` - `/** @var null|Expr Default value */`
 * `$flags` - `/** @var int */`
 * `$attrGroups` - `/** @var AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Scalar\DNumber`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\DNumber;

return new DNumber(10.5);
```

↓

```php
10.5
```

<br>


### Public Properties

 * `$value` - `/** @var float Number value */`

<br>

## `PhpParser\Node\Scalar\Encapsed`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\Encapsed;

return new Encapsed([new Variable('variableName')]);
```

↓

```php
"{$variableName}"
```

<br>


### Public Properties

 * `$parts` - `/** @var Expr[] list of string parts */`

<br>

## `PhpParser\Node\Scalar\EncapsedStringPart`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\EncapsedStringPart;

return new EncapsedStringPart('enscapsed');
```

↓

```php
UNABLE_TO_PRINT_ENCAPSED_STRING
```

<br>


### Public Properties

 * `$value` - `/** @var string String value */`

<br>

## `PhpParser\Node\Scalar\LNumber`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\LNumber;

return new LNumber(1000);
```

↓

```php
1000
```

<br>


### Public Properties

 * `$value` - `/** @var int Number value */`

<br>

## `PhpParser\Node\Scalar\String_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\String_;

return new String_('some string');
```

↓

```php
'some string'
```

<br>


### Public Properties

 * `$value` - `/** @var string String value */`
 * `$replacements` - ``

<br>

## `PhpParser\Node\Stmt\Case_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Case_;

$trueConstFetch = new ConstFetch(new Name('true'));

return new Case_($trueConstFetch);
```

↓

```php
case true:
```

<br>


### Public Properties

 * `$cond` - `/** @var null|Node\Expr Condition (null for default) */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`

<br>

## `PhpParser\Node\Stmt\Catch_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\Catch_;

$fullyQualified = new FullyQualified('ClassType');
$variable = new Variable('CaughtVariable');

return new Catch_([$fullyQualified], $variable);
```

↓

```php
catch (\ClassType $CaughtVariable) {
}
```

<br>


### Public Properties

 * `$types` - `/** @var Node\Name[] Types of exceptions to catch */`
 * `$var` - `/** @var Expr\Variable|null Variable for exception */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`

<br>

## `PhpParser\Node\Stmt\ClassConst`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Const_;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassConst;

$defaultValue = new String_('default value');
$const = new Const_('SOME_CLASS_CONSTANT', $defaultValue);

return new ClassConst([$const], Class_::MODIFIER_PUBLIC);
```

↓

```php
public const SOME_CLASS_CONSTANT = 'default value';
```

<br>


### Public Properties

 * `$flags` - `/** @var int Modifiers */`
 * `$consts` - `/** @var Node\Const_[] Constant declarations */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] */`

<br>

## `PhpParser\Node\Stmt\ClassMethod`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;

$classMethod = new ClassMethod('methodName');
$classMethod->flags = Class_::MODIFIER_PUBLIC;

return $classMethod;
```

↓

```php
public function methodName()
{
}
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Identifier;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;

$classMethod = new ClassMethod('methodName');
$classMethod->flags = Class_::MODIFIER_PRIVATE;

$param = new Param(new Variable('paramName'));
$classMethod->params = [$param];
$classMethod->returnType = new Identifier('string');

return $classMethod;
```

↓

```php
private function methodName($paramName): string
{
}
```

<br>


### Public Properties

 * `$flags` - `/** @var int Flags */`
 * `$byRef` - `/** @var bool Whether to return by reference */`
 * `$name` - `/** @var Node\Identifier Name */`
 * `$params` - `/** @var Node\Param[] Parameters */`
 * `$returnType` - `/** @var null|Node\Identifier|Node\Name|Node\NullableType|Node\UnionType Return type */`
 * `$stmts` - `/** @var Node\Stmt[]|null Statements */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`
 * `$magicNames` - ``

<br>

## `PhpParser\Node\Stmt\Class_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Class_;

return new Class_('ClassName');
```

↓

```php
class ClassName
{
}
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\Class_;

$class = new Class_('ClassName');

$class->flags = Class_::MODIFIER_FINAL;
$class->extends = new FullyQualified('ParentClass');

return $class;
```

↓

```php
final class ClassName extends \ParentClass
{
}
```

<br>


### Public Properties

 * `$flags` - `/** @var int Type */`
 * `$extends` - `/** @var null|Node\Name Name of extended class */`
 * `$implements` - `/** @var Node\Name[] Names of implemented interfaces */`
 * `$name` - `/** @var Node\Identifier|null Name */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Stmt\Const_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Const_;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Const_ as ConstStmt;

$consts = [new Const_('CONSTANT_IN_CLASS', new String_('default value'))];

return new ConstStmt($consts);
```

↓

```php
const CONSTANT_IN_CLASS = 'default value';
```

<br>


### Public Properties

 * `$consts` - `/** @var Node\Const_[] Constant declarations */`

<br>

## `PhpParser\Node\Stmt\DeclareDeclare`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\DeclareDeclare;

return new DeclareDeclare('strict_types', new LNumber(1));
```

↓

```php
strict_types=1
```

<br>


### Public Properties

 * `$key` - `/** @var Node\Identifier Key */`
 * `$value` - `/** @var Node\Expr Value */`

<br>

## `PhpParser\Node\Stmt\Declare_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\Node\Stmt\DeclareDeclare;

$declareDeclare = new DeclareDeclare('strict_types', new LNumber(1));

return new Declare_([$declareDeclare]);
```

↓

```php
declare(strict_types=1);
```

<br>


### Public Properties

 * `$declares` - `/** @var DeclareDeclare[] List of declares */`
 * `$stmts` - `/** @var Node\Stmt[]|null Statements */`

<br>

## `PhpParser\Node\Stmt\Do_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Do_;

$variable = new Variable('variableName');

return new Do_($variable);
```

↓

```php
do {
} while ($variableName);
```

<br>


### Public Properties

 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$cond` - `/** @var Node\Expr Condition */`

<br>

## `PhpParser\Node\Stmt\Echo_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Echo_;

$string = new String_('hello');

return new Echo_([$string]);
```

↓

```php
echo 'hello';
```

<br>


### Public Properties

 * `$exprs` - `/** @var Node\Expr[] Expressions */`

<br>

## `PhpParser\Node\Stmt\ElseIf_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\ElseIf_;
use PhpParser\Node\Stmt\Return_;

$name = new Name('true');
$constFetch = new ConstFetch($name);
$stmt = new Return_();

return new ElseIf_($constFetch, [$stmt]);
```

↓

```php
elseif (true) {
    return;
}
```

<br>


### Public Properties

 * `$cond` - `/** @var Node\Expr Condition */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`

<br>

## `PhpParser\Node\Stmt\Foreach_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Foreach_;

$foreachedVariable = new Variable('foreachedVariableName');
$asVariable = new Variable('asVariable');

return new Foreach_($foreachedVariable, $asVariable);
```

↓

```php
foreach ($foreachedVariableName as $asVariable) {
}
```

<br>


### Public Properties

 * `$expr` - `/** @var Node\Expr Expression to iterate */`
 * `$keyVar` - `/** @var null|Node\Expr Variable to assign key to */`
 * `$byRef` - `/** @var bool Whether to assign value by reference */`
 * `$valueVar` - `/** @var Node\Expr Variable to assign value to */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`

<br>

## `PhpParser\Node\Stmt\Function_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Function_;

return new Function_('some_function');
```

↓

```php
function some_function()
{
}
```

<br>


### Public Properties

 * `$byRef` - `/** @var bool Whether function returns by reference */`
 * `$name` - `/** @var Node\Identifier Name */`
 * `$params` - `/** @var Node\Param[] Parameters */`
 * `$returnType` - `/** @var null|Node\Identifier|Node\Name|Node\NullableType|Node\UnionType Return type */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Stmt\Global_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Global_;

$variable = new Variable('globalVariable');

return new Global_([$variable]);
```

↓

```php
global $globalVariable;
```

<br>


### Public Properties

 * `$vars` - `/** @var Node\Expr[] Variables */`

<br>

## `PhpParser\Node\Stmt\Goto_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Goto_;

return new Goto_('goto_break');
```

↓

```php
goto goto_break;
```

<br>


### Public Properties

 * `$name` - `/** @var Identifier Name of label to jump to */`

<br>

## `PhpParser\Node\Stmt\GroupUse`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name;
use PhpParser\Node\Stmt\GroupUse;
use PhpParser\Node\Stmt\UseUse;

$uses = [new UseUse(new Name('UserName'))];

return new GroupUse(new Name('prefix'), $uses);
```

↓

```php
use prefix\{UserName};
```

<br>


### Public Properties

 * `$type` - `/** @var int Type of group use */`
 * `$prefix` - `/** @var Name Prefix for uses */`
 * `$uses` - `/** @var UseUse[] Uses */`

<br>

## `PhpParser\Node\Stmt\HaltCompiler`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\HaltCompiler;

return new HaltCompiler('remaining');
```

↓

```php
__halt_compiler();remaining
```

<br>


### Public Properties

 * `$remaining` - `/** @var string Remaining text after halt compiler statement. */`

<br>

## `PhpParser\Node\Stmt\If_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\If_;

$cond = new ConstFetch(new Name('true'));

return new If_($cond);
```

↓

```php
if (true) {
}
```

<br>


### Public Properties

 * `$cond` - `/** @var Node\Expr Condition expression */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$elseifs` - `/** @var ElseIf_[] Elseif clauses */`
 * `$else` - `/** @var null|Else_ Else clause */`

<br>

## `PhpParser\Node\Stmt\InlineHTML`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\InlineHTML;

return new InlineHTML('<strong>feel</strong>');
```

↓

```php
?>
<strong>feel</strong><?php
```

<br>


### Public Properties

 * `$value` - `/** @var string String */`

<br>

## `PhpParser\Node\Stmt\Interface_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt\Interface_;

return new Interface_(new Identifier('InterfaceName'));
```

↓

```php
interface InterfaceName
{
}
```

<br>


### Public Properties

 * `$extends` - `/** @var Node\Name[] Extended interfaces */`
 * `$name` - `/** @var Node\Identifier|null Name */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Stmt\Label`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Label;

return new Label('labelName');
```

↓

```php
labelName:
```

<br>


### Public Properties

 * `$name` - `/** @var Identifier Name */`

<br>

## `PhpParser\Node\Stmt\Property`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\PropertyProperty;
use PhpParser\Node\VarLikeIdentifier;

$propertyProperty = new PropertyProperty(new VarLikeIdentifier('propertyName'));

return new Property(Class_::MODIFIER_PUBLIC, [$propertyProperty], [], 'string');
```

↓

```php
public string $propertyName;
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\PropertyProperty;
use PhpParser\Node\VarLikeIdentifier;

$propertyProperty = new PropertyProperty(new VarLikeIdentifier('propertyName'));

return new Property(Class_::MODIFIER_PUBLIC, [$propertyProperty]);
```

↓

```php
public $propertyName;
```

<br>

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\PropertyProperty;

$propertyProperties = [new PropertyProperty('firstProperty'), new PropertyProperty('secondProperty')];

return new Property(Class_::MODIFIER_STATIC | Class_::MODIFIER_PUBLIC, $propertyProperties);
```

↓

```php
public static $firstProperty, $secondProperty;
```

<br>


### Public Properties

 * `$flags` - `/** @var int Modifiers */`
 * `$props` - `/** @var PropertyProperty[] Properties */`
 * `$type` - `/** @var null|Identifier|Name|NullableType|UnionType Type declaration */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Stmt\PropertyProperty`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\PropertyProperty;

return new PropertyProperty('propertyName');
```

↓

```php
$propertyName
```

<br>


### Public Properties

 * `$name` - `/** @var Node\VarLikeIdentifier Name */`
 * `$default` - `/** @var null|Node\Expr Default */`

<br>

## `PhpParser\Node\Stmt\StaticVar`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\StaticVar;

$variable = new Variable('variableName');

return new StaticVar($variable);
```

↓

```php
$variableName
```

<br>


### Public Properties

 * `$var` - `/** @var Expr\Variable Variable */`
 * `$default` - `/** @var null|Node\Expr Default value */`

<br>

## `PhpParser\Node\Stmt\Static_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Static_;
use PhpParser\Node\Stmt\StaticVar;

$staticVars = [new StaticVar(new Variable('static'))];

return new Static_($staticVars);
```

↓

```php
static $static;
```

<br>


### Public Properties

 * `$vars` - `/** @var StaticVar[] Variable definitions */`

<br>

## `PhpParser\Node\Stmt\Switch_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Case_;
use PhpParser\Node\Stmt\Switch_;

$cond = new Variable('variableName');
$cases = [new Case_(new LNumber(1))];

return new Switch_($cond, $cases);
```

↓

```php
switch ($variableName) {
    case 1:
}
```

<br>


### Public Properties

 * `$cond` - `/** @var Node\Expr Condition */`
 * `$cases` - `/** @var Case_[] Case list */`

<br>

## `PhpParser\Node\Stmt\Throw_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Throw_;

$string = new String_('some string');

return new Throw_($string);
```

↓

```php
throw 'some string';
```

<br>


### Public Properties

 * `$expr` - `/** @var Node\Expr Expression */`

<br>

## `PhpParser\Node\Stmt\TraitUse`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\TraitUse;

return new TraitUse([new FullyQualified('TraitName')]);
```

↓

```php
use \TraitName;
```

<br>


### Public Properties

 * `$traits` - `/** @var Node\Name[] Traits */`
 * `$adaptations` - `/** @var TraitUseAdaptation[] Adaptations */`

<br>

## `PhpParser\Node\Stmt\TraitUseAdaptation\Alias`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;

$traitFullyQualified = new FullyQualified('TraitName');

return new Alias($traitFullyQualified, 'method', Class_::MODIFIER_PUBLIC, 'aliasedMethod');
```

↓

```php
\TraitName::method as public aliasedMethod;
```

<br>


### Public Properties

 * `$newModifier` - `/** @var null|int New modifier */`
 * `$newName` - `/** @var null|Node\Identifier New name */`
 * `$trait` - `/** @var Node\Name|null Trait name */`
 * `$method` - `/** @var Node\Identifier Method name */`

<br>

## `PhpParser\Node\Stmt\TraitUseAdaptation\Precedence`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name;
use PhpParser\Node\Stmt\TraitUseAdaptation\Precedence;

$firstTrait = new Name('SomeTrait');
$secondTrait = new Name('OverriddenTrait');

return new Precedence($firstTrait, 'methodName', [$secondTrait]);
```

↓

```php
SomeTrait::methodName insteadof OverriddenTrait;
```

<br>


### Public Properties

 * `$insteadof` - `/** @var Node\Name[] Overwritten traits */`
 * `$trait` - `/** @var Node\Name|null Trait name */`
 * `$method` - `/** @var Node\Identifier Method name */`

<br>

## `PhpParser\Node\Stmt\Trait_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Stmt\Trait_;

return new Trait_('TraitName');
```

↓

```php
trait TraitName
{
}
```

<br>


### Public Properties

 * `$name` - `/** @var Node\Identifier|null Name */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$attrGroups` - `/** @var Node\AttributeGroup[] PHP attribute groups */`

<br>

## `PhpParser\Node\Stmt\TryCatch`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\TryCatch;

$variable = new Variable('exceptionVariableName');
$catch = new Catch_([new FullyQualified('CatchedType')], $variable);

$funcCall = new FuncCall(new Name('funcCallName'));
$stmts = [new Expression($funcCall)];

return new TryCatch($stmts, [$catch]);
```

↓

```php
try {
    funcCallName();
} catch (\CatchedType $exceptionVariableName) {
}
```

<br>


### Public Properties

 * `$stmts` - `/** @var Node\Stmt[] Statements */`
 * `$catches` - `/** @var Catch_[] Catches */`
 * `$finally` - `/** @var null|Finally_ Optional finally node */`

<br>

## `PhpParser\Node\Stmt\Unset_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\Unset_;

$variable = new Variable('variableName');

return new Unset_([$variable]);
```

↓

```php
unset($variableName);
```

<br>


### Public Properties

 * `$vars` - `/** @var Node\Expr[] Variables to unset */`

<br>

## `PhpParser\Node\Stmt\UseUse`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Name;
use PhpParser\Node\Stmt\UseUse;

return new UseUse(new Name('UsedNamespace'));
```

↓

```php
UsedNamespace
```

<br>


### Public Properties

 * `$type` - `/** @var int One of the Stmt\Use_::TYPE_* constants. Will only differ from TYPE_UNKNOWN for mixed group uses */`
 * `$name` - `/** @var Node\Name Namespace, class, function or constant to alias */`
 * `$alias` - `/** @var Identifier|null Alias */`

<br>

## `PhpParser\Node\Stmt\While_`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Stmt\While_;

return new While_(new Variable('variableName'));
```

↓

```php
while ($variableName) {
}
```

<br>


### Public Properties

 * `$cond` - `/** @var Node\Expr Condition */`
 * `$stmts` - `/** @var Node\Stmt[] Statements */`

<br>

## `PhpParser\Node\UnionType`


### Example PHP Code

```php
<?php

declare(strict_types=1);

use PhpParser\Node\Identifier;
use PhpParser\Node\UnionType;

$unionedTypes = [new Identifier('string'), new Identifier('int')];

return new UnionType($unionedTypes);
```

↓

```php
string|int
```

<br>


### Public Properties

 * `$types` - `/** @var (Identifier|Name)[] Types */`

<br>

