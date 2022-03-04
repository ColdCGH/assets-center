<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Consume extends Base
{
	protected $router='/assets/consume';

	protected $args=[
		'assets_type',
		'assets'
	];
}