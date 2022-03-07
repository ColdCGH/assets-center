<?php

namespace Wbk\Asset\Service\AssetType;


use Wbk\Asset\Service\Base;

class Delete extends Base
{
	protected $router = '/assetType/delete';

	protected $args = ['code'];
}