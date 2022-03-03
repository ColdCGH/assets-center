<?php

namespace Asset\Service\Account;

use Asset\Service\Base;

class Register extends Base
{
    protected $router = '/account/register';

    protected $args = [
        'account_info'
    ];
}