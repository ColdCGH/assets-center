<?php

namespace Asset\Service\Account;

use Asset\Service\Base;

class Update extends Base
{
	protected $router='/account/update';

	protected $args = [
		'user_info'
	];
}