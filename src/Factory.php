<?php

namespace Wbk\AssetCenter;

use Wbk\AssetCenter\Factory\Account;
use Wbk\AssetCenter\Factory\AssetType;

/**
 * Class Factory
 * @method static Account Account()   资产账号
 * @method static AssetType AssetType()   资产类型
 * @package sffi
 */
class Factory
{
    public static function make($name)
    {
        $application = "Wbk\\AssetCenter\\Factory\\{$name}";

        return new $application();
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name);
    }
}