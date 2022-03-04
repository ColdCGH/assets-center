<?php

namespace Asset\Service\AssetType;


use Asset\Service\Base;

class Delete extends Base
{
	protected $router = '/assetType/delete';

	protected $args = ['code'];
}