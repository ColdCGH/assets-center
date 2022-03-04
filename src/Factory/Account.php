<?php

namespace Asset\Factory;

use Asset\Service\Account\Logout;
use Asset\Service\Account\Query;
use Asset\Service\Account\Register;
use Asset\Service\Account\Update;

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