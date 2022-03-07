<?php

namespace Wbk\Asset\Factory;

use Wbk\Asset\Service\AssetType\AddType;
use Wbk\Asset\Service\AssetType\Delete;
use Wbk\Asset\Service\AssetType\Query;

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