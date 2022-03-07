<?php

namespace Wbk\Asset\Service\Assets;
use Wbk\Asset\Service\Base;

class Transfer extends Base
{
	protected $router='/assets/transfer';

	protected $args=[
		'code',
		'assets',
		'payee_key'
	];
}