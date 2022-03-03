<?php

namespace Wbk\AssetCenter\service\Account;

use Wbk\AssetCenter\service\Base;

class Register extends Base
{
    protected $router = '/account/register';

    protected $args = [
        'account_info'
    ];
}