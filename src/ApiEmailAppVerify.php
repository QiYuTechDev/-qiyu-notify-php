<?php
// 这个文件由 https://code.qiyutech.tech/docs 自动生成
// 请不要使用手工修改

namespace Notify;


class ApiEmailAppVerify extends ApiBase
{


    /**
     * 验证电子邮箱
     */
    public static function do_post(
        EmailVerifyArgs $body
    ): ?array
    {
        $method = "POST";
        $base_url = "https://notify.qiyutech.tech";
        $path_url = "/api/email/app/verify";
        $path_args = [];
        $query_args = [];
        $header = [];
        $body_args = $body->to_array();
        $bearer = "";
        $ret =
            self::doSendRequest($method, $base_url, $path_url, $path_args, $query_args, $header, $body_args, $bearer);
        if (empty($ret)) {
            return null;
        }
        return $ret;
    }


}

