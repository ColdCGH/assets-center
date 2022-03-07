<?php

namespace Wbk\Asset\Service\Assets;

use Wbk\Asset\Service\Base;

class Query extends Base
{
	protected $router='/assets/assetQuery';

	protected $args=[
		'assets_type'
	];

}