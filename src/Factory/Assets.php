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
 * @method Consume consume($code,$assets,$remark)
 * @method Frozen frozen($code,$frozen_assets,$remark)
 * @method Logout logout($code)
 * @method Query query($code)
 * @method Recharge recharge($code,$assets,$remark)
 * @method Transfer transfer($code,$assets,$payeeKey)
 * @method Unfreeze unfreeze($code,$assets,$remark)
 * @package Asset\Factory\Asset
 */
class Assets extends Base
{
}