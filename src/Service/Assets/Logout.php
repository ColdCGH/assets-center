<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Logout extends Base
{
	protected $router='/assets/assetsLogout';

	protected $args=[
		'code'
	];
}