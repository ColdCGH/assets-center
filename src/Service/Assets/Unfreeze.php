<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Unfreeze extends Base
{
	protected $router='/assets/unfreeze';

	protected $args=[
		'assets_type',
		'assets'
	];
}