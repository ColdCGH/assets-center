<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Recharge extends Base
{
	protected $router='/assets/recharge';

	protected $args=[
		'assets_type',
		'assets'
	];
}