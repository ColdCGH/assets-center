<?php

namespace Wbk\Asset;

use Wbk\Asset\Factory\Account;
use Wbk\Asset\Factory\AccountAssetsRecord;
use Wbk\Asset\Factory\Assets;


/**
 * Class Asset
 * @method static Account Account($selfKey)   资产账号
 * @method static AccountAssetsRecord AccountAssetsRecord($selfKey) 资产流水
 * @method static Assets Assets($selfKey)      资产管理
 * @package Asset
 */
class Asset
{
    protected static string $selfKey;

    public static function selfKey(string $arg)
    {
        self::$selfKey = $arg;
    }

    public static function make($name)
    {
        $application = "Wbk\\Asset\\Factory\\{$name}";
        return new $application(self::$selfKey);
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
        self::selfKey($arguments[0]);
        return self::make($name);
    }
}