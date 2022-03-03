<?php

namespace Asset\Service\AssetType;

use Asset\Service\Base;

class AddType extends Base
{
    protected $router = '/assetType/addType';

    protected $args = [
        'name',
        'code'
    ];
}