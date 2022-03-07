<?php


namespace Wbk\Asset\Util;


use Exception;

class ConfigUtil
{
    /**
     * @throws Exception
     */
    public static function getConfigFile($fileName, $path = '')
    {
        if (is_file(__DIR__ . '\..\..\config\asset_center.php')){
            $config = require __DIR__ . '\..\..\config\asset_center.php';
            if (isset($config['config_path']) && $config['config_path']) {
                $path =  __DIR__.'\..\..\config\\';
            }
        }
        if(!$path){
            $path = __DIR__.'/../../config';
        }
        return require $path . '/'. $fileName;
    }
}