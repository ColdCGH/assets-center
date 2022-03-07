<?php

namespace Wbk\Asset\Service\Account;

use Wbk\Asset\Service\Base;

class Register extends Base
{
    protected $router = '/account/register';

    protected $args = [
        'account_info'
    ];
}