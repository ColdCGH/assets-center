<?php


namespace Wbk\Asset\Util;


class StringUtil
{
    /**
     * @return string
     */
    public static function uuid(): string
    {
        $chars = md5(uniqid(mt_rand(), true));
        return substr ( $chars, 0, 8 ) . '-'
            . substr ( $chars, 8, 4 ) . '-'
            . substr ( $chars, 12, 4 ) . '-'
            . substr ( $chars, 16, 4 ) . '-'
            . substr ( $chars, 20, 12 );
    }
}