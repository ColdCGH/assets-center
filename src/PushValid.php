<?php


namespace Wbk\AssetCenter;


use Exception;
use Wbk\AssetCenter\util\ConfigUtil;

class PushValid
{
    /**
     * @throws Exception
     */
    public function valid(\Closure $callback)
    {
        $str = file_get_contents('php://input');
        $data = json_decode($str, true);
        $config = ConfigUtil::getConfigFile('asset_center.php');
        $sign = md5($config['key'].$data['factor'].$config['account_private']);
        if (strtoupper($sign) == $data['validate_code']){
            return $callback($data);
        }
        throw new Exception('无效访问', 1000088);
    }
}