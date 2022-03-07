<?php

namespace Wbk\Asset\Factory;

use Wbk\Asset\Service\Account\Logout;
use Wbk\Asset\Service\Account\Query;
use Wbk\Asset\Service\Account\Register;
use Wbk\Asset\Service\Account\Update;

/**
 * Class Account
 * @method Query query()
 * @method Register register(array $user_info)
 * @method Update update(array $user_info)
 * @method Logout logout()
 * @package Asset\Factory\Asset
 */
class Account extends Base
{
}