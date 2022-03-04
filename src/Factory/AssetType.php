<?php

namespace Asset\Factory;

use Asset\Service\AssetType\AddType;
use Asset\Service\AssetType\Delete;
use Asset\Service\AssetType\Query;

/**
 * Class AssetType
 * @method Query query()
 * @method AddType addType($name, $code)
 * @method Delete delete($code)
 * @package Asset\Factory
 */
class AssetType extends Base
{
}