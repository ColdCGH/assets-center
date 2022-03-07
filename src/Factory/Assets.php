<?php

namespace Wbk\Asset\Factory;

use Wbk\Asset\Service\Assets\Consume;
use Wbk\Asset\Service\Assets\Frozen;
use Wbk\Asset\Service\Assets\Logout;
use Wbk\Asset\Service\Assets\Query;
use Wbk\Asset\Service\Assets\Recharge;
use Wbk\Asset\Service\Assets\Transfer;
use Wbk\Asset\Service\Assets\Unfreeze;

/**
 * Class Assets
 * @method Consume consume($assets_type,$assets)
 * @method Frozen frozen($assets_type,$frozen_assets)
 * @method Logout logout($assets_type)
 * @method Query query($assets_type)
 * @method Recharge recharge($assets_type,$assets)
 * @method Transfer transfer($assets_type,$assets,$payee)
 * @method Unfreeze unfreeze($assets_type,$assets)
 * @package Asset\Factory\Asset
 */
class Assets extends Base
{
}