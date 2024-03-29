<?php

namespace Wbk\Asset\Service;

use Exception;
use Wbk\Asset\Util\ConfigUtil;
use Wbk\Asset\Util\RequestUtil;
use Wbk\Asset\Util\StringUtil;

class Base
{
    protected static $token;
    protected $head=[];

    protected $config = [];

    protected $param;
    protected $router;

    protected $args;
    protected $rule = [];
    /**
     * @var array 需要加密的字段
     */
    protected $needEncryption = [];
    protected $encrypted = [
    ];

    /**
     * @throws Exception
     */
    public function __construct(string $selfKey = '')
    {
        $this->config = ConfigUtil::getConfigFile('asset_center.php');
        $this->head['Content-Type'] = "application/json";
        $this->head['Cache-Control'] = "no-cache";
        $this->head['s_id'] = StringUtil::uuid();
        $this->head['key'] = $selfKey;
        $this->head['platform-key'] = $this->config['platform_key'];
    }

    /**
     * @throws Exception
     */
    public function run(...$arguments)
    {
        foreach ($this->args as $key => $arg) {
            if (array_key_exists($key, $arguments)){
                $this->param[$arg] = $arguments[$key];
                continue;
            }
            if (!key_exists($arg, $arguments) && count($this->rule)>0 && isset($this->rule[$arg]) && $this->rule[$arg]=='require') {
                throw new Exception('参数缺失，请检查参数！', 10000);
            }
        }
        return $this->request();
    }

    /**
     * @throws Exception
     */
    public function request()
    {
        $res = RequestUtil::curlPostJson($this->config['url'].$this->router, $this->param, $this->head);
        if ($res['code'] == '1'){
            return $res['data'] ?? true;
        }
        throw new Exception($res['msg'], $res['code']);
    }
}