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
 * @method Consume consume($code,$assets,$extra,$remark)
 * @method Frozen frozen($code,$frozen_assets,$extra,$remark)
 * @method Logout logout($code)
 * @method Query query($code)
 * @method Recharge recharge($code,$assets,$extra,$remark)
 * @method Transfer transfer($code,$assets,$payeeKey,$extra,$remark)
 * @method Unfreeze unfreeze($code,$assets,$extra,$remark)
 * @package Asset\Factory\Asset
 */
class Assets extends Base
{
}