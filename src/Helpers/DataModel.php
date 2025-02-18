<?php

namespace Zerotoprod\StreamContext\Helpers;

use Zerotoprod\DynamicSetter\DynamicSetter;
use Zerotoprod\Transformable\Transformable;

/**
 * @internal
 */
trait DataModel
{
    use \Zerotoprod\DataModel\DataModel;
    use Transformable;
    use DynamicSetter;
}
