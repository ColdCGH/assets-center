<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Logout extends Base
{
	protected $router='/assets/assetsLogout';

	protected $args=[
		'assets_type'
	];
}