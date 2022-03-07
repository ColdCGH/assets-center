<?php

namespace Wbk\Asset\Service\AccountAssetsRecord;
use Wbk\Asset\Service\Base;

class Query extends Base
{
	protected $router='/accountAssetsRecord/query';

	protected $args = [
		'code'
	];
}