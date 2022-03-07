<?php

namespace Wbk\Asset;

use Wbk\Asset\Factory\Account;
use Wbk\Asset\Factory\AccountAssetsRecord;
use Wbk\Asset\Factory\Assets;


/**
 * Class Asset
 * @method static Account Account()   资产账号
 * @method static AccountAssetsRecord AccountAssetsRecord() 资产流水
 * @method static Assets Assets()      资产管理
 * @method static Platform Platform()
 * @package Asset
 */
class Asset
{
    public static function make($name)
    {
        $application = "Wbk\\Asset\\Factory\\{$name}";

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