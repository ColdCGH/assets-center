<?php

namespace Wbk\Asset\Service\Account;

use Wbk\Asset\Service\Base;

class Update extends Base
{
	protected $router='/account/update';

	protected $args = [
		'account_info'
	];
}