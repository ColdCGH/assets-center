<?php

namespace Wbk\Asset\Service\AssetType;

use Wbk\Asset\Service\Base;

class AddType extends Base
{
    protected $router = '/assetType/addType';

    protected $args = [
        'name',
        'code'
    ];
}