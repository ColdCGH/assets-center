<?php

namespace Wbk\AssetCenter\service\AssetType;

use Wbk\AssetCenter\service\Base;

class AddType extends Base
{
    protected $router = '/assetType/addType';

    protected $args = [
        'name',
        'code'
    ];
}