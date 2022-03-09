<?php

namespace Wbk\Asset\Factory;

use Exception;

class Base
{
    private string $selfKey;

    public function __construct($key)
    {
        $this->selfKey = $key;
    }

    /**
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        $selfName = substr(static::class, strlen(__NAMESPACE__) + 1);
        if (strpos($name, '_')) {
            $name = implode('', explode(' ',ucwords(str_replace('_',' ', $name))));
        }
        $className = 'Wbk\\Asset\\Service\\'.$selfName.'\\' . ucfirst($name);
        if (class_exists($className)){
            return call_user_func_array([new $className($this->selfKey),'run'], $arguments);
        }
        throw new Exception($className.'不存在');
    }
}