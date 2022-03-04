<?php

namespace Asset\Factory;

use Asset\Service\Assets\Consume;
use Asset\Service\Assets\Frozen;
use Asset\Service\Assets\Logout;
use Asset\Service\Assets\Query;
use Asset\Service\Assets\Recharge;
use Asset\Service\Assets\Transfer;
use Asset\Service\Assets\Unfreeze;

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