<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Consume extends Base
{
	protected $router='/assets/consume';

	protected $args=[
		'code',
		'assets'
	];
}