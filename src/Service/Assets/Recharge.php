<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Recharge extends Base
{
	protected $router='/assets/recharge';

	protected $args=[
		'code',
		'assets',
		'extra',
		'remark'
	];
}