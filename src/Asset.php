<?php

namespace Asset;

use Asset\Factory\Account;
use Asset\Factory\AccountAssetsRecord;
use Asset\Factory\Assets;
use Asset\Factory\AssetType;

/**
 * Class Asset
 * @method static Account Account()   资产账号
 * @method static AccountAssetsRecord AccountAssetsRecord() 资产流水
 * @method static Assets Assets()      资产管理
 * @method static AssetType AssetType()   资产类型
 * @package Asset
 */
class Asset
{
    public static function make($name)
    {
        $application = "Asset\\Factory\\{$name}";

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