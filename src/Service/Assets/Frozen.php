<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Frozen extends Base
{
	protected $router='/assets/frozen';

	protected $args=[
		'assets_type',
		'frozen_assets'
	];
}