<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Frozen extends Base
{
	protected $router='/assets/frozen';

	protected $args=[
		'code',
		'frozen_assets'
	];
}