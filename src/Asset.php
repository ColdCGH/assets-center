<?php

namespace Asset;

use Asset\Factory\Account;
use Asset\Factory\AssetType;

/**
 * Class Asset
 * @method static Account Account()   资产账号
 * @method static AssetType AssetType()   资产类型
 * @package sffi
 */
class Asset
{
    public static function make($name)
    {
        $application = "Factory\\{$name}";

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