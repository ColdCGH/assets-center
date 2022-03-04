<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Unfreeze extends Base
{
	protected $router='/assets/unfreeze';

	protected $args=[
		'assets_type',
		'assets'
	];
}