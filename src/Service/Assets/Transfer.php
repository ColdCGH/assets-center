<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Transfer extends Base
{
	protected $router='/assets/transfer';

	protected $args=[
		'assets_type',
		'assets',
		'payee'
	];
}