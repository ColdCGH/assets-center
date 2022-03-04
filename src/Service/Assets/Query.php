<?php

namespace Asset\Service\Assets;

use Asset\Service\Base;

class Query extends Base
{
	protected $router='/assets/assetQuery';

	protected $args=[
		'assets_type'
	];

}