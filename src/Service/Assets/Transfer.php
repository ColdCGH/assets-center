<?php

namespace Asset\Service\Assets;
use Asset\Service\Base;

class Transfer extends Base
{
	protected $router='/assets/transfer';

	protected $args=[
		'assets_type',
		'assets',
		'payee'
	];
}