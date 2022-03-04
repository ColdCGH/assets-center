<?php

namespace Asset\Service\AccountAssetsRecord;
use Asset\Service\Base;

class Query extends Base
{
	protected $router='/accountAssetsRecord/query';

	protected $args = [
		'assets_type'
	];
}